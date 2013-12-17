<?php
class VerifyModel extends Model{
	public function isAdmin() {
		$admin = M('admin');
		return $admin->field(array('username','password'))->select();
	}
	public function checkUserAndPwd($name,$pwd){
		/**
		连接数据库验证密码是否正确，密码正确则对比用户名是否一致，如果都正确则返回用户名
		*/
		$admin = M('admin');
		$username = $admin->where(array('password'=>$pwd))->field('username')->select();	//默认返回多维数组
		return $username[0]['username'] === $name ? $name : false;
	}

}