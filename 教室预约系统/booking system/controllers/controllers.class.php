<?php
require_once(dirname(__FILE__).'/../view/views.class.php');
class Controller {
	protected $mController;
	protected $mAction;
	protected $mView;
	public function __construct($controller,$action){
		$this->mController = $controller;
		$this->mAction = $action;
		$this->mView = new View($controller,$action);
	}
	public function assign($name,$value){
		$this->mView->assign($name,$value);
	}
	public function render(){
		$this->mView->render();
	}
	public function run() {
		require_once(dirname(__FILE__).'/'.$this->mController.'/'.$this->mAction.'.php');
	}
}