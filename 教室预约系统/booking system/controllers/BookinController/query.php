<?php
require_once(dirname(__FILE__).'/../../models/BookinModel.class.php');
$date = $_REQUEST['date'];
$period = $_REQUEST['period'];
$type = $_REQUEST['type'];
$model = new BookinModel();
$result = $model->queryRoom($date,$period,$type);
$this->assign('result',$result);
$this->assign('date',$date);
$this->assign('period',$period);
$this->render();
?>