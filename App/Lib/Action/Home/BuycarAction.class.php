<?php
class BuycarAction extends Action {
	public function index() {
		var_dump($_POST);
		$this->display('index');
	}
}