<?php
class View {
	protected $mVarialbes = array();
	protected $mController;
	protected $mAction;
	public function __construct($controller,$action){
		$this->mController = $controller;
		$this->mAction = $action;
	}
	public function assign($name,$value){
		$this->mVarialbes[$name] = $value;
	}
	public function render(){
		extract($this->mVarialbes);		
		if (file_exists(dirname(__FILE__).'/../templets/'.$this->mController.'_'.$this->mAction.'.html'))
			require_once(dirname(__FILE__).'/../templets/'.$this->mController.'_'.$this->mAction.'.html');
		else 
			require_once(dirname(__FILE__).'/../templets/'.$this->mController.'_'.$this->mAction.'.php');
	}	
}
?>