<?php
class LoginAction extends Action {
	
	//登录页面
	public function index() {
		$this->display ( 'login/login' );
	}
	
	//登录页面
	public function login() {
		$this->display ( 'login/login' );
	}
	
	//退出登录操作
	function logout() {
		if (isset ( $_SESSION ["admin_id"] ) or isset ( $_SESSION ["admin_name"] )) {
			session_destroy ();
			$this->success ( '登出成功' );
		} else {
			$this->error ( '已经登出了' );
		}
	}
	
	//验证码显示
	public function verify() {
		import ( "ORG.Util.Image" );
		Image::buildImageVerify ( 4, 1, "png", 55, 28, "verify" );
	}
	
	//验证是否账号密码
	function checklogin() {
		//此处多余可自行改为Model自动验证
		if (empty ( $_POST ['username'] )) {
			$this->error ( '帐号必须！' );
		} elseif (empty ( $_POST ['password'] )) {
			$this->error ( '密码必须！' );
		} elseif (empty ( $_POST ['verify'] )) {
			$this->error ( '验证码必须！' );
		}
		
		if ($_SESSION ['verify'] != md5 ( $_POST ['verify'] )) {
			$this->error ( '验证码错误！' );
		}
		
		$map = array ();
		$map ['admin_user'] = I ( 'username' );
		$map ['admin_pass'] = I ( 'password' );
		
		$Modual = M ( "Admin" );
		$mymodual = $Modual->where ( " admin_user='%s'  ", $map ['admin_user'] )->find ();
		
		//记录开始
		$Model = M ( "Info" );
		$logdata ['type_id'] = 1;
		$logdata ['time'] = time ();
		$logdata ['ip'] = get_client_ip ();
		//记录结束
		

		if (empty ( $mymodual )) {
			$logdata ['info1'] = "账号不存在或者被禁用! 帐号:" . I ( 'username' );
			$Model->add ( $logdata );
			$this->error ( '账号不存在或者被禁用!' );
		} else {
			if ($mymodual ["admin_pass"] != md5 ( $map ['admin_pass'] . $mymodual ["admin_uuid"] )) {
				$logdata ['info1'] = "账号密码错误! 帐号:" . I ( 'username' ) . " 密码:" . I ( 'password' );
				$Model->add ( $logdata );
				$this->error ( '账号密码错误!' );
			} else {
				$_SESSION ["admin_id"] = $mymodual ['id'];
				$_SESSION ["admin_name"] = $mymodual ['admin_user'];
				$_SESSION ["admin_rank"] = $mymodual ['admin_rank'];
				$_SESSION ["admin_power"] = $mymodual ['admin_power'];
				$logdata ['info1'] = "登录成功! 帐号:" . I ( 'username' );
				$Model->add ( $logdata );
				$this->success ( '登录成功!', U ( "Index/index" ) );
			}
		}
	}

}
?>