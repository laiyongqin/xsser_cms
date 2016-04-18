<?php
class ToolsmailAction extends BaseAction {
	
	public $c_letf_number = 7;
	
	public function index() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Model = M ( "Conf" );
		$mail_address = $Model->where ( " conf='%s' ", "发件邮箱地址" )->find ();
		$mail_smtp = $Model->where ( " conf='%s' ", "邮箱SMTP服务器" )->find ();
		$mail_loginname = $Model->where ( " conf='%s' ", "邮箱登录帐号" )->find ();
		$mail_password = $Model->where ( " conf='%s' ", "邮箱密码" )->find ();
		$mail_toaddress = $Model->where ( " conf='%s' ", "邮箱收件箱" )->find ();
		$this->assign ( "mail_address", $mail_address );
		$this->assign ( "mail_smtp", $mail_smtp );
		$this->assign ( "mail_loginname", $mail_loginname );
		$this->assign ( "mail_password", $mail_password );
		$this->assign ( "mail_toaddress", $mail_toaddress );
		
		$c_letf_number = 7;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'tools/mail/index' ); //输出页面模板
	}
	
	//修改
	public function update() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$conf = M ( "Conf" );
		//$conf->startTrans();//开启事物
		$result1 = $conf->where ( 'conf="%s"', "发件邮箱地址" )->setField ( 'value', I ( 'mail_address' ) );
		$result2 = $conf->where ( 'conf="%s"', "邮箱SMTP服务器" )->setField ( 'value', I ( 'mail_smtp' ) );
		$result3 = $conf->where ( 'conf="%s"', "邮箱登录帐号" )->setField ( 'value', I ( 'mail_loginname' ) );
		$result4 = $conf->where ( 'conf="%s"', "邮箱密码" )->setField ( 'value', I ( 'mail_password' ) );
		$result5 = $conf->where ( 'conf="%s"', "邮箱收件箱" )->setField ( 'value', I ( 'mail_toaddress' ) );
		$this->success ( '数据更新成功！', U ( "index" ) );
	
		//            if ($result1 or $result2 or $result3 or $result4 or $result5) {
	//            	//$conf->commit();//成功则提交
	//                $this->success('数据更新成功！',U("index"));
	//            } else {
	//            	//$conf->rollback();//失败返回
	//                //$this->error('数据写入错误');
	//                //$this->ajaxReturn($conf->_sql());
	//            }
	}
	
	//发送邮件
	public function test_post_mail() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		if (SendMail ( '', "XSSER_CMS提示您有一个新的网站留言!", "这是一封测试邮件！欢迎使用XSSER_CMS系统!" )) {
			//$this->ajaxReturn("",'测试邮件发送成功,请登陆邮箱查看！',1);
			header ( "Content-Type: text/html; charset=utf-8" );
			echo "测试邮件发送成功,请登陆邮箱查看！ <a href=\"javascript:window.close()\" >关闭窗口</a>";
		} else {
			//$this->ajaxReturn("",'测试邮件发送失败,请检查邮箱SMTP服务是否开启和您填写的邮箱信息是否有误！',0);
			header ( "Content-Type: text/html; charset=utf-8" );
			echo "测试邮件发送失败,请检查邮箱SMTP服务是否开启和您填写的邮箱信息是否有误！ <a href=\"javascript:window.close()\" >关闭窗口</a>";
		}
	
	}

}