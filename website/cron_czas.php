<?
include "class/mysql.class.php";

$mysql = new mysql();
$mysql->connect();
$mysqli = $mysql->mysqli;

$premium = $mysqli->query("UPDATE `users1` SET `online24h` = '0'");
?>