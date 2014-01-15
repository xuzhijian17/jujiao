<?php
class BuycarAction extends Action {
	public function index() {
		#var_dump($_POST);
		#$this->assign ( 'title', 'xuzhijian17');
		$this->display('index');
	}
	public function header(){
		$this->assign ( 'Admin', $title );
	}
}