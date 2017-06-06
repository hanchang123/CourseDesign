<?php
require_once(dirname(__FILE__).'/model.class.php');
class BookinModel extends model {
	public function queryRoom($date,$period,$type) {
		//get room list
		$sql = "Select roomId,roomName From room Where type='$type'";
		$roomlist = $this->mysql->query($sql);	
		if ($roomlist == false) {
			return false;
		}
		//get bookin list
		$sql = "Select roomId From bookin Where date='$date' and period='$period'";
		$bookinlist = $this->mysql->query($sql);
		$result = array();
		if ($bookinlist == false) {
			while ($row = $roomlist->fetch_array()) {
				array_push($result,$row['roomName']);
			}
			$roomlist->close();
			return $result;
		}
		$bookin = array();
		while ($row = $bookinlist->fetch_array()) {
			array_push($bookin,$row['roomId']);
		}
		$bookinlist->close();
		while ($row = $roomlist->fetch_array()) {
			if (!in_array($row['roomId'],$bookin)) {
				array_push($result,$row['roomName']);
			}
		}
		$roomlist->close();
		return $result;
	}
	public function getRoomInfoByName($roomName) {
		$sql = "Select * From room Where roomName='$roomName'";
		$result = $this->mysql->query($sql);
		if ($result == false) {
			return false;
		}
		$row = $result->fetch_array();
		$result->close();
		return $row;
	}
}
?>