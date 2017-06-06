<?php
require(dirname(__FILE__).'/model.class.php');
class UserModel extends model {
	function verify($username,$password) {
		$sql = "Select password From user Where username='$username'";
		$result = $this->mysql->query($sql);
		if ($result == false) {
			return false;
		}
		$pw = $result->fetch_array();
		if ($pw['password'] == $password) {
			return true;
		}
		return false;
	}	
}
?>