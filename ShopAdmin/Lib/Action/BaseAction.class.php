<?php
class BaseAction extends Action {
	
	public function _initialize() {
		//初始化的时候检测是否登录
		$this->checkRbac ();
		//获取系统信息
		$this->getsysinfo ();
	}
	
	// 检查用户权限
	protected function checkRbac() {
		// 这里是检测是否登录
		if (! isset ( $_SESSION ["admin_id"] ) or ! isset ( $_SESSION ["admin_name"] )) {
			$this->error ( '没有登录', U ( "Login/index" ) );
		}
	}
	
	//获取系统信息
	protected function getsysinfo() {
		$Model = M ( "Conf" );
		$getsysinfo_title = $Model->where ( " conf='%s' ", "网站标题" )->find ();
		$getsysinfo_keywords = $Model->where ( " conf='%s' ", "网站关键词" )->find ();
		$getsysinfo_description = $Model->where ( " conf='%s' ", "网站描述" )->find ();
		$this->assign ( "getsysinfo_title", $getsysinfo_title );
		$this->assign ( "getsysinfo_keywords", $getsysinfo_keywords );
		$this->assign ( "getsysinfo_description", $getsysinfo_description );
	}
	//检验是否具有模块操作权限
	public function check_quanxian_module($power_id, $module_id, $caozuo) {
		if ($power_id != 1 && $_SESSION ["admin_rank"] != 0) { //0是最高权限不需要审核
			$Modual = M ( "quanxian_caozuomodule" );
			$mymodual = $Modual->where ( 'module_id=' . $module_id . ' AND power_id=' . $power_id )->find ();
			$admin_power_name = getadmin_power_name ( $power_id );
			$admin_moduletable_name = getadmin_moduletable_name ( $module_id );
			if ($mymodual == null or $mymodual [$caozuo] == 0) {
				$this_error_str = '你所在的权限组【' . $admin_power_name . '】' . '没有对模块【' . $admin_moduletable_name . '】的【' . getcaozuo_str_to_hanzi ( $caozuo ) . '】权限！';
				$this->error ( $this_error_str, U ( "Index/index" ) );
			}
		}
	}
	//检验是否具有单页和新闻模块操作权限
	public function check_quanxian_n($power_id, $nid, $caozuo) {
		if ($power_id != 1 && $_SESSION ["admin_rank"] != 0) { //0是最高权限不需要审核
			$Modual = M ( "quanxian_caozuon" );
			$mymodual = $Modual->where ( 'nid=' . $nid . ' AND power_id=' . $power_id )->find ();
			$admin_power_name = getadmin_power_name ( $power_id );
			$this_newstype_name = get_newstype_name ( $nid );
			if ($mymodual == null or $mymodual [$caozuo] == 0) {
				$this_error_str = '你所在的权限组【' . $admin_power_name . '】' . '没有对新闻或单页栏目【' . $this_newstype_name . '】的【' . getcaozuo_str_to_hanzi ( $caozuo ) . '】权限！请联系系统管理员开通！';
				$this->error ( $this_error_str );
			}
		}
	}
	//检验是否具有产品模块操作权限
	public function check_quanxian_p($power_id, $pid, $caozuo) {
		if ($power_id != 1 && $_SESSION ["admin_rank"] != 0) { //0是最高权限不需要审核
			$Modual = M ( "quanxian_caozuop" );
			$mymodual = $Modual->where ( 'pid=' . $pid . ' AND power_id=' . $power_id )->find ();
			$admin_power_name = getadmin_power_name ( $power_id );
			$this_producttype_name = get_producttype_name ( $pid );
			if ($mymodual == null or $mymodual [$caozuo] == 0) {
				$this_error_str = '你所在的权限组【' . $admin_power_name . '】' . '没有对产品栏目【' . $this_producttype_name . '】的【' . getcaozuo_str_to_hanzi ( $caozuo ) . '】权限！请联系系统管理员开通！';
				$this->error ( $this_error_str );
			}
		}
	}

}
?>