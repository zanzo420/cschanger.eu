<?
include "panel/class/mysql.class.php";
$mysql = new mysql();
$mysql->connect();
$mysqli = $mysql->mysqli;


							$query1 = $mysqli->query("SELECT * FROM `users1` WHERE `admin` != '1' ORDER BY `id` DESC LIMIT 2000");
							if($query1->num_rows >0)
							{
								while($r1 = $query1->fetch_assoc())
								{
									echo $r1["email"]."<br>";
								}	
							}else{
								echo 'wszyscy potwierdzili';
							}
							?>