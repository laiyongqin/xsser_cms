<?php
class IndexAction extends BaseAction{
	public function index() {
		 //GetHostByName($_SERVER['SERVER_NAME'])." {".show_ip_address(GetHostByName($_SERVER['SERVER_NAME']))."} ";
		 $this->display (); //输出页面模板
	}
}