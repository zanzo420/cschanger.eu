<?php
include "mysql.class.php";

$mysql = new mysql();
$mysql->connect();
$mysqli = $mysql->mysqli;
if($mysql->status_DB == true)
{
	if($mysqli->query("UPDATE `users1` SET `online24h`=0"))
		
		{
			echo "elo";
		}
	
}