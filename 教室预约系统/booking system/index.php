<?php
//resolve url
$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'UserController';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
$controllerArr = array('UserController','AdminController','BookinController');
$actionArr = array('index','login','logout','book','query','verify');
//
if (!in_array($action,$actionArr)) {
	$action = 'index';
}
if (!in_array($controller,$controllerArr)) {
	$controller = 'UserController';
}
//run
require_once('./controllers/controllers.class.php');
$contol = new Controller($controller,$action);
$contol->run();
?>