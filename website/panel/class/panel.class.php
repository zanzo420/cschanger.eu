<?php
session_start();
include_once "mysql.class.php";

class panel extends mysql {
	function __construct()
	{
		mysql::connect();
		$this->get_status_user();
	}
	
	function get_online_users()
	{
		/*
			$type: "program", "website"
			$option: "api"
		*/
		global $mysqli;
		
		$czasaktualny = $mysqli->query("UPDATE `users1` SET czas=Now()");
		$uzytkownicy_online = $mysqli->query("Select * From `users1` Where czas_last>czas");
		$online = $uzytkownicy_online->num_rows;
		return $online;
	}
	function update_time_program()
	{
		global $mysqli;
		$czaslast = $mysqli->query("UPDATE `users1` SET czas_last=DATE_ADD(NOW(), INTERVAL '0#0#5#0' DAY_SECOND) WHERE `login`='Tristand'");
	}
	
	function get_status_user()
	{
		global $mysqli;
		/*
			$option: "api"
		*/
		$user_id = $_SESSION["login_id"];
		$query = $mysqli->query("select * from `users1` WHERE `id` = $user_id");
		$user = $query->fetch_assoc();
		
		$this->status_premium = $user["plan"];
		$this->status_premium_date = $user["plan_date"];
		$this->status_premium_code = $user["plan_code"];
		$this->email_status = $user["email_status"];
		$this->user_steamid = $user["steam_id"];
		$this->user_steamname = $user["steam_login"];
		$this->user_id = $user["id"];
		$this->user_beta = $user["beta"];
		$this->user_email = $user["email"];
		$this->user_login = $user["login"];
		$this->lp = $user["lp"];
		$this->online24h = $user["online24h"];
	}
}
?>