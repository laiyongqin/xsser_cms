<?php
class ShopBaseAction extends BaseAction {
	public function _initialize(){
		//初始化的时候检查用户权限
         $this->checkRbac();
	}
	// 检查用户权限
	protected function checkRbac() {
		// 这里是具体的检测代码
	    if($_SESSION["admin_rank"]!=0) {
            $this->error('商城功能需要最高系统权限,需要联系我们!');
        }
	}
}
?>