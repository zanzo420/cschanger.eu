<?
session_start();
include_once "mysql.class.php";

class paypal extends mysql {
    
   var $last_error;                 // holds the last error encountered
   
   var $ipn_log;                    // bool: log IPN results to text file?
   
   var $ipn_log_file;               // filename of the IPN log
   var $ipn_response;               // holds the IPN response from paypal   
   var $ipn_data = array();         // array contains the POST values for IPN
   
	var $fields = array();           // array holds the fields to submit to paypal
   
   var $user_id;
   
   
   function paypal() {
       
      // initialization constructor.  Called when class is created.
      mysql::connect();
      //$this->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
      $this->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
      $this->last_error = '';
	  
	  $this->ipn_log_file = '.ipn_results.log';
      $this->ipn_log = true; 
      $this->ipn_response = '';
                                                                
      // populate $fields array with a few default values.  See the paypal
      // documentation for a list of fields and their data types. These defaul
      // values can be overwritten by the calling script.

      $this->add_field('rm','2');           // Return method = POST
      $this->add_field('cmd','_xclick'); 
      
   }
   function add_field($field, $value) {
      
      // adds a key=>value pair to the fields array, which is what will be 
      // sent to paypal as POST variables.  If the value is already in the 
      // array, it will be overwritten.
            
      $this->fields["$field"] = $value;
   }
   
   function add_user_id($id)
   {
	   $this->user_id = $id;
   }

	function submit_paypal_post() {
		global $mysqli;
		$time = time();
		$options = array();
		$options["user_id"] = $this->user_id;
		foreach ($this->fields as $name => $value) {
			$options[$name] = $value;
		}
		if($query = $mysqli->query("INSERT INTO `payments` VALUES(NULL, '".$options["user_id"]."', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '".$options["amount"]."', NULL, '".$options["item_name"]."', '".$options["os0"]."', 'Send', '".$options["custom"]."', NULL, '$time', NULL)"))
		{
			//echo "<html>\n";
			echo "<title>Processing paypal...</title>";
			echo "<body onLoad=\"document.forms['paypal_form'].submit();\">\n";
			//   echo "<center><h2>Please wait, your order is being processed and you";
			//  echo " will be redirected to the paypal website.</h2></center>\n";
			echo "<form method=\"post\" name=\"paypal_form\" ";
			echo "action=\"".$this->paypal_url."\">\n";

			foreach ($this->fields as $name => $value) {
				echo "<input type=\"hidden\" name=\"$name\" value=\"$value\"/>\n";
			}
			//echo "<center><br/><br/>If you are not automatically redirected to ";
			// echo "paypal within 5 seconds...<br/><br/>\n";
			// echo "<input type=\"submit\" value=\"Click Here\"></center>\n";
			//foreach ($this->fields as $name => $value) {
				//echo "Nazwa: $name i value: $value <br>";
			//}
			echo "</form>\n";
		}
   }
   
   function validate_ipn() {

      // parse the paypal URL
      $url_parsed=parse_url($this->paypal_url);        

      // generate the post string from the _POST vars aswell as load the
      // _POST vars into an arry so we can play with them from the calling
      // script.
      $post_string = '';    
      foreach ($_POST as $field=>$value) { 
         $this->ipn_data["$field"] = $value;
         $post_string .= $field.'='.urlencode(stripslashes($value)).'&'; 
      }
      $post_string.="cmd=_notify-validate"; // append ipn command

      // open the connection to paypal
      $fp = fsockopen($url_parsed[host],"80",$err_num,$err_str,30); 
      if(!$fp) {
          
         // could not open the connection.  If loggin is on, the error message
         // will be in the log.
         $this->last_error = "fsockopen error no. $errnum: $errstr";
         $this->log_ipn_results(false);       
         return false;
         
      } else { 
 
         // Post the data back to paypal
         fputs($fp, "POST $url_parsed[path] HTTP/1.1\r\n"); 
         fputs($fp, "Host: $url_parsed[host]\r\n"); 
         fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n"); 
         fputs($fp, "Content-length: ".strlen($post_string)."\r\n"); 
         fputs($fp, "Connection: close\r\n\r\n"); 
         fputs($fp, $post_string . "\r\n\r\n"); 

         // loop through the response from the server and append to variable
         while(!feof($fp)) { 
            $this->ipn_response .= fgets($fp, 1024); 
         } 

         fclose($fp); // close connection

      }
      
      if (eregi("VERIFIED",$this->ipn_response)) {
  
         // Valid IPN transaction.
         $this->log_ipn_results(true);
         return true;       
         
      } else {
  
         // Invalid IPN transaction.  Check the log for details.
         $this->last_error = 'IPN Validation Failed.';
         $this->log_ipn_results(false);   
         return false;
         
      }
      
   }
   
   function log_ipn_results($success) {
       global $mysqli;
      if (!$this->ipn_log) return;  // is logging turned off?
      
      // Timestamp
      $text = '['.date('m/d/Y g:i A').'] - '; 
      
      // Success or failure being logged?
      if ($success) $text .= "SUCCESS!\n";
      else $text .= 'FAIL: '.$this->last_error."\n";
      
      // Log the POST variables
		
		$text .= "IPN POST Vars from Paypal:\n";
		$data = array();
		foreach ($this->ipn_data as $key=>$value) {
			$text .= "$key=$value, ";
			$data[$key] = $value;
		}
		
		if($query = $mysqli->query("SELECT * FROM `payments` WHERE `custom_code` = '".$data["custom"]."'"))
		{
			$time = time();
			$query_r = $query->fetch_assoc();
			$query2 = $mysqli->query("UPDATE `payments` SET 
							`status` = '".$data["payment_status"]."', 
							`name` = '".$data["address_name"]."', 
							`email` = '".$data["payer_email"]."', 
							`amount_pay` = '".$data["payment_gross"]."',
							`data_action` = '$time',
							`paypal_transaction_id` = '".$data["txn_id"]."' 
			
			WHERE `id` = '".$query_r["id"]."' ");
			
			if($data["payment_status"] == "Completed") {
				$days = NULL;
				switch($data["option_selection1"]){
					case "$2.29 - 14Days": $days = 14; break;
					case "$3.99 - 14Days": $days = 30; break;
					case "$7.69 - 14Days": $days = 60; break;
				}
				$custom_code = substr(md5(date("d.m.Y.H.i.s").rand(1,1000000)) , 0 , 100000);
				$query3 = $mysqli->query("UPDATE `users1` SET 
								`plan` = '1', 
								`plan_date` =DATE_ADD(NOW(), INTERVAL '".$days."#0#0#0' DAY_SECOND),
								`plan_code` = '".$custom_code."'
				
				WHERE `id` = '".$query_r["id_user"]."' ");
			}
		}
		
		// Log the response from the paypal server
		$text .= "\nIPN Response from DZIAlaPaypal Server:\n ".$this->ipn_response;
      
		// Write to log
	  
		$fp=fopen($this->ipn_log_file,'a');
		fwrite($fp, $text . "\n\n"); 

		fclose($fp);  // close file
	  
   }
}         


 


?>