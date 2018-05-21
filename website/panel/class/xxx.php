<?
include "mysql.class.php";
class panel extends mysql
{
	
	function __construct()
	{
			mysql::connect();
	}
	function xd()
	{
		global $mysqli;
		
		$query = $mysqli->query("SELECT * FROM `users1` WHERE `czas_last`>DATE_ADD(NOW(), INTERVAL -1 DAY)");
		echo $query->num_rows;
	}
}

$p = new panel();
$p->xd();
?>