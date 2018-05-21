<?php
$link = mysql_connect("localhost", "root", "PLMNKOplm");
$db_selected = mysql_select_db('casepot', $link);
mysql_query("SET NAMES utf8");
$lastgame = fetchinfo("value","info","name","current_game");
function fetchinfo($rowname,$tablename,$finder,$findervalue) {
	$result = mysql_query("SELECT $rowname FROM $tablename WHERE `$finder`='$findervalue'");
	$row = mysql_fetch_assoc($result);
	return $row[$rowname];
}
?>