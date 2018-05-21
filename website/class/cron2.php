<?php
include "mysql.class.php";

$mysql = new mysql();
$mysql->connect();
$mysqli = $mysql->mysqli;
if($mysql->status_DB == true)
{
	$czasaktualny = $mysqli->query("UPDATE `users1` SET czas=Now()");
	if($query = $mysqli->query("Select * From `users1` Where plan_date<=czas AND `plan` = 1"))
	{
		while($r = $query->fetch_assoc())
		{
			$query2 = $mysqli->query("UPDATE `users1` SET `plan` = '0', `plan_date` = NULL, `plan_code` = 0 WHERE `id` = '".$r["id"]."' ");
		}
	}
	
}