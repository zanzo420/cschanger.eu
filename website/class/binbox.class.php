<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://binbox.io/api.js"></script>
<script type="text/javascript">
var BB = new Binbox.API("http://Tristand.binbox.io/");
</script>
<?
include "binbox-api.class.php";


class binbox extends binbox_api
{
	public $bb = null;
	public $mysqli;
	function __construct()
	{
		global $bb;
		global $mysqli;
		$bb = new binbox_api('Tristand.binbox.io');
		$this->bb = $bb;
		$mysql = new mysql();
		$mysql->connect();
	}
	
	function newPasts()
	{
		global $bb;
		global $mysqli;
		?>
		<script>
		var myObj = new Object();
		
		var pluginArrayArg = new Array();
		<?
		for( $x = 1; $x <= 10; $x++ )
		{
		$password = $this->random_key(12);
		$code = $this->random_key(8);
		?>
		
		var password = "<? echo $password; ?>";
		var text = 'Twój kod dostępu to: <? echo $code ?>';
		var code = '<? echo $code ?>';
		var name = 'Pasts #<? echo $x; ?>';
		var data = BB.encrypt(text, password);
		//boxes.pastdata<?echo $x; ?> = data;
		//myObj.pastpassword<?echo $x; ?> = password;
		//myObj.pastcode<?echo $x; ?> = code;
		
		var jsonArg1 = new Object();
		jsonArg1.pastdate = data;
		jsonArg1.password = password;
		jsonArg1.name = name;
		jsonArg1.code = code;
		
		pluginArrayArg.push(jsonArg1);
		<?
		}
		?>
		console.log(myObj);
		console.log(pluginArrayArg);
		 $.post('binbox.class.php', {liczba: pluginArrayArg}, function(data) 
		 {
			alert(data);
		 });
		 </script>
		<?
		echo "Kod JS wygenerował liczbę ".$_POST['liczba'];
		if(isset($_POST["liczba"]))
		{
			$mysqli->query("TRUNCATE TABLE `pasts`");
			$pastdata = $_POST["liczba"];
			foreach($pastdata as $item)
			{
				$past_date = $item["pastdate"];
				$past_name = $item["name"];
				$past_password = $item["password"];
				$past_code = $item["code"];
				$result = $bb->api("submit.json", ['data' => "$past_date", 'title' => "$past_name"]);
				
				$past_link = $result["id"];
				$mysqli->query("INSERT INTO `pasts` VALUES('', '$past_name', '$past_password', '$past_date', '$past_code', '$past_link')");
			}
		}
	}
	
	function active_user_past($id) //Sprawdzanie czy użytkownik ma paste czy nie
	{
		global $mysqli;
		$mysqli->query("UPDATE `users1` SET czas=Now()");
		if($query = $mysqli->query("SELECT * FROM `users1` WHERE `id` = '$id'")){
			
			$past = $query->fetch_assoc();
			$xd = $past["past_current"];
			$r = ($xd == NULL) ? 0 : $xd; 
			//$mysqli->query("UPDATE `users1` SET past_date=DATE_ADD(NOW(), INTERVAL '0#0#1#0' DAY_SECOND) WHERE `id`='$id' ");
			if($r != 10) {
				if($past["past_date"] < $past["czas"])
				{
					//musi wykonac paste bo czas daty pasty jest nizszy nic czas terazniejszy 
					return 0;
				}
				else
				{
					return 1;
				}
			}else{
				return 3;
			}
		}
		/*
		0 - musi wykonac paste
		1 - nie musi wykonać paste/ale musi odliczać 
		2 - nie musi wykonac paste/nie musi odliczać
		*/
		//if($query1 = $mysqli->query("Select * From `users1` Where czas_last>czas AND `id` = '$login'"))
	}
	function get_user_past($id) //pobieranie danych jaka musi zrobic paste
	{
		$array = array();
		if($this->active_user_past($id) == 0) {
		global $mysqli;
		$mysqli->query("UPDATE `users1` SET czas=Now()");
		if($query = $mysqli->query("SELECT * FROM `users1` WHERE `id` = '$id'")){
			$result = $query->fetch_assoc();
			$past_current = ($result["past_current"] == NULL) ? 0 : $result["past_current"];
			
			if($past_current != 11) { 
				$array["status"] = 1;
				$int_past = $past_current+1;
				$query1 = $mysqli->query("SELECT * FROM `pasts` WHERE `id` = '$int_past' ");
				$result1 = $query1->fetch_assoc();
				$array["name"] = $result1["name"];
				$array["password"] = $result1["password"];
				$array["data"] = $result1["data"];
				$array["code"] = $result1["code"];
				$array["link"] = $result1["link"];
				
			}else{
				$array["status"] = 3;
			}
			return $array;
		}
		}else{
			$array["status"] = 0;
			return $array;
		}
	}
	function veryfi_user_past($id, $past_int, $past_code) //sprawdzanie czy użytkownik podał dobre dane do pasty
	{
		global $mysqli;
		if($query = $mysqli->query("SELECT * FROM `users1` WHERE `id` = '$id'"))
		{
			$result = $query->fetch_assoc();
			$past_current = ($result["past_current"] == NULL) ? 0 : $result["past_current"];
			$int_past = $past_current+1;
			
			$query2 = $mysqli->query("SELECT * FROM `pasts` WHERE `id` = '$int_past'");
			$result2 = $query2->fetch_assoc();
			$code = $result2["code"];
			
			if($past_code == $result2["code"])
			{
				// pasta zaakceptowana
				$int_past_update = $int_past++;
				$xd = $mysqli->query("UPDATE `users1` SET `past_date`=DATE_ADD(NOW(), INTERVAL '0#0#0#10' DAY_SECOND), `past_current`='$int_past_update' WHERE `id`='$id' ");
				
				return 1;
			}
			else 
			{
				return 0;
				// zle dane pasty
			}
		}else
		{
			return 500;
		}
	}
	public function random_key($int)
	{
		return substr(md5(date("d.m.Y.H.i.s").rand(1,1000000)) , 0 , $int);
	}
}
/*
$p = new binbox();
echo $p->active_user_past(1); //pobieranie danych jaka musi zrobic paste 
echo "<br><Br><Br><BR>";
print_r($p->get_user_past(1)); //pobieranie danych jaka musi zrobic paste 
echo "<br><Br><Br><BR>";
echo $p->veryfi_user_past(1, 4, "0f1227c1"); //sprawdzanie czy użytkownik podał dobre dane do pasty
//echo $p->newPasts();

*/
?>




































