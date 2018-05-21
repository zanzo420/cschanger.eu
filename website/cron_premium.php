<?
include "class/mysql.class.php";

$mysql = new mysql();
$mysql->connect();
$mysqli = $mysql->mysqli;

$premium = $mysqli->query("UPDATE `users1` SET plan = '0' WHERE login = 'TeJk' AND `plan_date` < `czas`");
?>