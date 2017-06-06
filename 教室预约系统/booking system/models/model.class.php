<?php
require_once(dirname(__FILE__).'/../config/config.php');
//echo $localhost;
class Sql {
	protected $mysql;
	function connect($localhost,$mysqlUser,$mysqlPw,$dbName) {
		$this->mysql = new mysqli($localhost,$mysqlUser,$mysqlPw);
		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		$this->mysql->select_db($dbName);
	}
	function query($query) {
		$result = $this->mysql->query($query);
		$row = $result->fetch_array();
		$result->close();
		return $row;
	}
	function close() {
		$this->mysql->close();
	}
}
class model extends Sql {
	function __construct() {
		global $localhost;
		global $mysqlUser;
		global $mysqlPw;
		global $dbName;
		global $charset;
		$this->connect($localhost,$mysqlUser,$mysqlPw,$dbName);
		$this->mysql->query('Set names '.$charset);
	}
}
class UserModel extends model {

}
?>