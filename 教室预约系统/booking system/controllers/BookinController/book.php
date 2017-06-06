<?php
require_once(dirname(__FILE__).'/../../models/BookinModel.class.php');
$date = $_REQUEST['date'];
$period = $_REQUEST['period'];
$roomName = $_REQUEST['roomName'];
$model = new BookinModel();
$roomInfo = $model.getRoomInfoByName($roomName);
$this->assign('date',$date);
$this->assign('period',$period);
$this->assign('roomInfo',$roomInfo);
$this->render();