<?php
session_start();


class IndexAction extends Action {
	public function index() {
		if(empty($_SESSION['username'])) {
			#$this->login();
			$this->redirect('Login/index');
			exit();
		}

		$acticles = array(
			array('id'=>'1','title'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','category'=>'hot','browser'=>59,'date'=>'2013-12-20 18:00'),
			array('id'=>'2','title'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','category'=>'hot','browser'=>59,'date'=>'2013-12-20 18:00'),
			array('id'=>'3','title'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','category'=>'hot','browser'=>59,'date'=>'2013-12-20 18:00'),
			array('id'=>'4','title'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','category'=>'hot','browser'=>59,'date'=>'2013-12-20 18:00'),
			array('id'=>'5','title'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','category'=>'hot','browser'=>59,'date'=>'2013-12-20 18:00'),
			array('id'=>'6','title'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','category'=>'hot','browser'=>59,'date'=>'2013-12-20 18:00'),
			array('id'=>'7','title'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','category'=>'hot','browser'=>59,'date'=>'2013-12-20 18:00'),
			array('id'=>'8','title'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','category'=>'hot','browser'=>59,'date'=>'2013-12-20 18:00'),
			array('id'=>'9','title'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','category'=>'hot','browser'=>59,'date'=>'2013-12-20 18:00')
		);
		$this->assign ( 'acticles', $acticles );
		$this->display();
	}
	
}