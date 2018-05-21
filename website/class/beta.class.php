<?
include_once "mysql.class.php";

class beta extends mysql
{
	public function __construct()
	{
		mysql::connect();
	}
	
	public function add($user_login, $user_system, $user_system_bit, $user_netframework, $user_config_cs, $user_logs, $user_motherboard, $user_list_programs, $user_location)
	{
		global $mysqli;
		
		if($this->status_DB == true)
		{	
			if($query = $mysqli->query("SELECT * FROM `users1` WHERE `login` = '$user_login'"))
			{
				$result_id = $query->fetch_assoc()["id"];
				if($query1 = $mysqli->query("SELECT * FROM `beta` WHERE `user_id` = '$result_id'"))
				{
					if($query1->num_rows > 0)
					{
						//update
						if($query2 = $mysqli->query("UPDATE `beta` SET 
						`user_system` = '$user_system', 
						`user_system_bit` = '$user_system_bit',
						`user_netframework` = '$user_netframework',
						`user_config_cs` = '$user_config_cs',
						`user_logs` = '$user_logs'
						`user_motherboard` = '$user_motherboard'
						`user_list_programs` = '$user_list_programs'
						`user_location` = '$user_location'
						WHERE `beta`.`id` = '$result_id' "))
						{
							return 1;
						}else{ return 0; }
					}else{
						//create
						if($query66 = $mysqli->query("INSERT INTO `beta` VALUES(NULL, '$result_id', '$user_system', '$user_system_bit', '$user_netframework', '$user_config_cs', '$user_logs', '$user_motherboard', '$user_list_programs', '$user_location' ) "))
						{
							return 1;
						}else{
							return 3;
						}
					}
				}
			}
		}else{
			return 0;
		}
		
	}
	
	public function view($user_login, $element)
	{
		global $mysqli;
		if($this->status_DB == true)
		{
			if($query = $mysqli->query("SELECT * FROM `users1` WHERE `login` = '$user_login'"))
			{
				if($query->num_rows > 0)
				{
					$id = $query->fetch_assoc()["id"];
					if($query2 = $mysqli->query("SELECT * FROM `beta` WHERE `user_id` = '$id'"))
					{
						if($query2->num_rows > 0)
						{
							return $query2->fetch_assoc()[$element];
						}else{
							return 0;
						}
					}else{
						return 5;
					}
				}else{
					return 0;
				}
			}else{
				return 5;
			}
		}else{
			return 0;
		}
	}
	
	public function add_report_bug($user_login, $user_date, $user_msg)
	{
		global $mysqli;
		
		if($this->status_DB = true)
		{
			if($query = $mysqli->query("SELECT * FROM `users1` WHERE `login` = '$user_login'"))
			{
				if($query->num_rows > 0)
				{
					$id = $query->fetch_assoc()["id"];
					$mysqli->set_charset("utf8");
					if($query2 = $mysqli->query("INSERT INTO `reports_bug` VALUES(NULL, '$id', '$user_login', '$user_date', '$user_msg')"))
					{
						return 1;
					}else{
						return 0;
					}
				}
			}else{
				return 5;
			}
		}else{
			return 0;
		}
	}
	
}
?>