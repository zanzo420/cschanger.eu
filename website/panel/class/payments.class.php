<?
require_once('paypal.class.php'); 
$p = new paypal;             // initiate an instance of the class
//$p->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url
$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';     // paypal url
            
// setup a variable for this script (ie: 'http://www.micahcarrick.com/paypal.php')
$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

// if there is not action variable, set the default action of 'process'

      // There should be no output at this point.  To process the POST data,
      // the submit_paypal_post() function will output all the HTML tags which
      // contains a FORM which is submited instantaneously using the BODY onload
      // attribute.  In other words, don't echo or printf anything when you're
      // going to be calling the submit_paypal_post() function.
 
      // This is where you would have your form validation  and all that jazz.
      // You would take your POST vars and load them into the class like below,
      // only using the POST values instead of constant string expressions.
 
      // For example, after ensureing all the POST variables from your custom
      // order form are valid, you might have:
      //
      // $p->add_field('first_name', $_POST['first_name']);
      // $p->add_field('last_name', $_POST['last_name']);
switch ($_GET['action']) {
    
	case 'process':      // Process and order...
	$CatDescription = $_REQUEST['CatDescription'];
    $payment = $_REQUEST['payment'];
    $id = $_REQUEST['id'];
    $key = $_REQUEST['key'];

    $p->add_field('business', 'kamilbialy76@gmail.com');
	
    $p->add_field('return', $this_script.'?action=success');
    $p->add_field('cancel_return', $this_script.'?action=cancel');
    $p->add_field('notify_url', $this_script.'?action=ipn');
	  
    $p->add_field('item_name', "Premium");
    $p->add_field('amount', "0.01");
    $p->add_field('currency_code', "USD");
    $p->add_field('on0', "type");
    $p->add_field('os0', "daus60");
		$p->add_field('on1', "Nick");
		$p->add_field('os1', "co ja no co ja");
	$p->submit_paypal_post(); // submit the fields to paypal
	
	break;
	
	case "success":
	
		echo "dzi¹ki za wp³ate";
		foreach ($_POST as $key => $value) { echo "$key: $value<br>"; }
		
	break;
	
	case "cancel":
	
		echo "annulowa³eœ xD";
		foreach ($_POST as $key => $value) { echo "$key: $value<br>"; }
		
	break;
	
	case 'ipn':          // Paypal is calling page for IPN validation...
      
      if ($p->validate_ipn()) { 
        
        $PaymentStatus =  $p->ipn_data['payment_status']; 
        $Email        =  $p->ipn_data['payer_email'];
        $id           =  $p->ipn_data['item_number'];
        
        if($PaymentStatus == 'Completed' or $PaymentStatus == 'Pending'){
            $PaymentStatus = '2';
        }else{
            $PaymentStatus = '1';
        }
		
		}
	break;
}
	
	
	
?>