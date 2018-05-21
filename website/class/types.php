<?
include "login.class.php"; /* LOGOWANIE */
include "info.class.php"; /* INFORMACJE */
include "beta.class.php"; /* BETA */
$info = new info();
if($_GET["type"] == "login")
{
		$login = new login();
		echo $login->login($_GET["nick"], $_GET["password"]);
}elseif(($_GET["type"] == "info") && (isset($_GET["login_nick"])))
{
	$info = new info();
	$info->info($_GET["login_nick"]);
	
	switch($_GET["gets"])
	{
		case "email": echo $info->email;break;
		case "plan": echo $info->plan; break;
		case "plan_date": echo $info->plan_date; break;
		case "plan_code": echo $info->plan_code; break;
		case "id": echo $info->id; break;
		case "ip": echo $info->ip; break;
		case "steam_id": echo $info->steam_id; break;
		case "steam_login": echo $info->steam_login; break;
		case "date_created": echo $info->date_created; break;
		case "admin": echo $info->admin; break;
		case "lp": echo $info->lp; break;
		case "ban": echo $info->ban; break;
		
		break;
	}
}elseif($_GET["type"] == "beta") {
	$user_login = $_GET["user_login"];
	$user_system = $_GET["user_system"];
	$user_system_bit = $_GET["user_system_bit"];
	$user_netframework= $_GET["user_netframework"];
	$user_config_cs = $_GET["user_config_cs"];
	$user_logs = $_GET["user_logs"];
	$user_motherboard = $_GET["user_motherboard"];
	$user_list_programs = $_GET["user_list_programs"];
	$user_location = $_GET["user_location"];
	$beta = new beta();
	echo $beta->add($user_login,
									$user_system,
									$user_system_bit,
									$user_netframework,
									$user_config_cs,
									$user_logs,
									$user_motherboard,
									$user_list_programs,
									$user_location);
									
}elseif($_GET["type"] == "beta_view") {
	$user_login = $_GET["user_login"];
	$user_element = $_GET["element"];
	
	$beta = new beta();
	echo $beta->view($user_login, $user_element);
}elseif($_GET["type"] == "beta_report_bug") {
	$user_login = $_GET["user_login"];
	$user_date = $_GET["user_date"];
	$user_msg = $_GET["user_msg"];
	
	$beta = new beta();
	echo $beta->add_report_bug($user_login, $user_date, $user_msg);
}elseif($_GET["type"] == "stat") {
	switch($_GET["gets"])
	{
		case "ilerazywlaczono": echo $info->add_current_client(); break;
		case "online24h": echo $info->add_current_client_minuts($_GET["login_nick"]); break;
		case "update_time_program": echo $info->update_time_program($_GET["login_nick"]); break;
		case "get_user_online": echo $info->get_user_online($_GET["login_nick"]); break;
	}
}else{
	echo "505";
}