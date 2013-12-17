<?php
session_start();

class LoginAction extends Action {
	public function index() {
		if(!empty($_SESSION['username'])) {
			#$this->login();
			$this->redirect('Index/index');
			exit();
		}
		$this->display();
	}

	public function verify($value='') {
		#var_dump($_POST);
		$name = $_POST['name'];
		$pwd = $_POST['password'];

		$login_do = D('Verify');
		$rname = $login_do->checkUserAndPwd($name, $pwd);	//如果密码正确，返回用户名

		if ($rname) {
			$_SESSION['username'] = $rname;
			print("Login Success!");
			$this->redirect('Index/index');
			exit();
		}else{
			exit("Login Failed!");
		}
	}
}