<?
include_once "mysql.class.php";

class info extends mysql
{
	public function __construct()
	{
		mysql::connect();
	}
	
	public function xd()
	{
		global $mysqli;
		
		$sql = "SELECT SUM(id) FROM `users`";
		$query = $mysqli->query($sql);
		$info = $query->fetch_assoc()["SUM(id)"];
		return $info;
	}
	
}

$i = new info();
echo $i->xd();
?>