<?php
include_once "mysql.class.php";

class betaa extends mysql
{
	function __construct()
	{
		mysql::connect();
	}
	
}
?>