<?php
class BaseAction extends Action {
	public function _initialize(){
		//初始化的时候检查用户权限
         $this->checkRbac();
         
        //获取系统信息
        $this->getsysinfo();
         
	}
	// 检查用户权限
	protected function checkRbac() {
		// 这里是具体的检测代码
	    if(!isset($_SESSION["admin_id"]) or !isset($_SESSION["admin_name"])) {
            $this->error('没有登录',U("Login/index"));
        }
	}
	
	//获取系统信息
	protected  function getsysinfo(){
		$Model= M("Conf");
		$getsysinfo_title =$Model->where(" conf='%s' ","网站标题")->find();
		$getsysinfo_keywords =$Model->where(" conf='%s' ","网站关键词")->find();
		$getsysinfo_description =$Model->where(" conf='%s' ","网站描述")->find();
		$this->assign ( "getsysinfo_title", $getsysinfo_title );
		$this->assign ( "getsysinfo_keywords", $getsysinfo_keywords );
		$this->assign ( "getsysinfo_description", $getsysinfo_description );
	}
	
}
?>