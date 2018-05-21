<?php
session_start();
include_once "mysql.class.php";
class info extends mysql
{
	public function __construct()
	{
		mysql::connect();
	}
	
	public function info($login)
	{
		global $mysqli;
		$this->email = 0;
		$this->id = 0;
		$this->steam_login = 0;
		$this->steam_id = 0;
		$this->date_created = 0;
		$this->plan = 0;
		$this->plan_date = 0;
		$this->plan_code = 0;
		$this->admin = 0;
		$this->lp = 0;
		$this->ban = 0;
		
		if($this->status_DB == true)
		{
			if($query = $mysqli->query("SELECT * FROM `users1` WHERE `login` = '$login'"))
			{
				while($r = $query->fetch_assoc())
				{
					$this->email = $r["email"];
					$this->id = $r["id"];
					$this->ip = $r["ip"];
					$this->steam_login = $r["steam_login"];
					$this->steam_id = $r["steam_id"];
					$this->date_created = $r["date_created"];
					$this->plan = $r["plan"];
					$this->plan_date = $r["plan_date"];
					$this->plan_code = $r["plan_code"];
					$this->admin = $r["admin"];
					$this->lp = $r["lp"];
					$this->ban = $r["ban"];
				}
			}else{
				return 2;
			}
		}else{
			return 3;
		}
	}
	
	public function add_current_client()
	{
		global $mysqli;
		if($query = $mysqli->query("SELECT * FROM `statystyki`"))
		{
			$result = $query->fetch_assoc()["ilerazywlaczono"];
			$result++;
			if($query = $mysqli->query("UPDATE `statystyki` SET `ilerazywlaczono`=$result WHERE 1")){
				return 1;
			}else { return 0; }
		}else { return 0; }
	}
	function update_time_program($login)
	{
		global $mysqli;
		if($czaslast = $mysqli->query("UPDATE `users1` SET czas_last=DATE_ADD(NOW(), INTERVAL '0#0#1#0' DAY_SECOND) WHERE `login`='$login' "))
		{
			echo "1";
		}else{
			echo "0";
		}
	}
	
	function get_user_online($login)
	{
		global $mysqli;
		$czasaktualny = $mysqli->query("UPDATE `users1` SET czas=Now()");
		if($query = $mysqli->query("Select * From `users1` Where czas_last>czas AND `login` = '$login'"))
		{
			$num_rows = $query->num_rows;
			if($num_rows>0)
			{
				return 1;
			}else{ return 0; }
		}else{ return 0; }
	}
	
	public function add_current_client_minuts($login)
	{
		global $mysqli;
		if($query = $mysqli->query("SELECT * FROM `users1` WHERE `login` = '$login'"))
		{
			$result = $query->fetch_assoc()["online24h"];
			$result++;
			if($query1 = $mysqli->query("UPDATE `users1` SET `online24h`=$result WHERE `login` = '$login'")){
				return 1;
			}else { return 0; }
		}else { return 0; }
	}
}
?>