<?
class mysql
{
	public $mysqli = null;
	public $status_DB = false;

	protected $db_name = 'admin_cschanger';
	protected $db_user = 'admin_root';
	protected $db_pass = 'xxx';
	protected $db_host = 'localhost';

	public function connect() {
		global $mysqli;
		$mysqli = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name);

		if ($mysqli->connect_error != 0 ) {
			$this->mysqli = null;
			$this->status_DB = null;
						echo $mysql->connect_errno();
		}else
		{
			$mysqli->set_charset("utf8");
			$this->mysqli = $mysqli;
			$this->status_DB = true;
		}
		return true;
	}

	public function close()
	{
		$mysqli->close();
	}
}
//$mysql = new mysql();
//var_dump($mysql->status_DB);
?>