<?php
class ConfigAdminAction extends BaseAction {
	
	public $c_letf_number = 7;
	
	public function index() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Model = M ( "Admin" );
		
		//所有板块		
		$thislist = $Model->order ( 'id desc' )->select ();
		$this->assign ( "thislist", $thislist );
		
		//所有管理员等级权限
		$powerModual = M ( "quanxian_power" );
		$cpower_list = $powerModual->order ( 'id asc' )->select ();
		$this->assign ( "cpower_list", $cpower_list ); // 赋值数据集
		

		$this->assign ( "c_letf_number", $this->c_letf_number );
		$this->display ( 'config/admin/index' ); //输出页面模板
	}
	
	//增加模型
	public function add() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Form = D ( "Admin" );
		if ($Form->create ()) {
			$Model = M ( "Admin" );
			$data ["admin_uuid"] = create_uuid ();
			$data ["admin_user"] = I ( "admin_user" );
			$data ["admin_pass"] = md5 ( I ( "admin_pass" ) . $data ["admin_uuid"] );
			$data ["login_ip"] = get_client_ip ();
			$data ["login_time"] = time ();
			$data ["admin_rank"] = 1;
			$data ["admin_power"] = I ( "admin_power_id" );
			if (false !== $Model->data ( $data )->add ()) {
				$this->success ( '数据添加成功！' );
			} else {
				$this->error ( '数据写入错误' );
			}
		} else {
			// 字段验证错误
			$this->error ( $Form->getError () );
		}
	}
	
	//修改模型
	public function update_info() {
		//检验是否具有模块操作权限
		//$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Modual = M ( "Admin" );
		$mymodual = $Modual->find ( $_GET ["id"] );
		$this->assign ( "mymodual", $mymodual );
		
		//所有管理员等级权限
		$powerModual = M ( "quanxian_power" );
		$cpower_list = $powerModual->order ( 'id asc' )->select ();
		$this->assign ( "cpower_list", $cpower_list ); // 赋值数据集
		

		$this->assign ( "c_letf_number", $this->c_letf_number );
		$this->display ( 'config/admin/update' ); //输出页面模板
	}
	
	//修改模型
	public function update() {
		//检验是否具有模块操作权限
		//$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Form = D ( "Admin" );
		if ($Form->create ()) {
			$Model = M ( "Admin" );
			$mymodual = $Model->find ( $_POST ["id"] );
			$data ["admin_pass"] = md5 ( I ( "admin_pass" ) . $mymodual ["admin_uuid"] );
			if (false !== $Model->where ( 'id=%d', I ( "id" ) )->save ( $data )) {
				$this->success ( '数据更新成功！' );
			} else {
				$this->error ( '数据写入错误' );
			}
		} else {
			// 字段验证错误
			$this->error ( $Form->getError () );
		}
	}
	
	//删除数据  //这里还应该存在删除一类 也删除这一类下面的文章
	public function del() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		if ($_SESSION ["admin_power"] == 1 && $_SESSION ["admin_rank"] == 0) { //0是最高权限不需要审核
			$Modual = M ( "Admin" );
			if($_GET ['id']==1){
				$this->error ( '不允许删除这个终极管理员!' );
			}
			if ($Modual->where ( 'id=%d', $_GET ['id'] )->delete ()) {
				$this->success ( '数据删除成功！', 'index' );
			} else {
				$this->error ( '数据写入错误' );
			}
		} else {
			$this->error ( '必须是系统管理员身份才可以删除后台管理人员!' );
		}
	}
	//配置模块权限
	public function quanxian_module() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Model = M ( "quanxian_moduletable" );
		
		//所有板块		
		$thislist = $Model->order ( 'id asc' )->select ();
		$this->assign ( "thislist", $thislist );
		
		$Modualpower = M ( "quanxian_power" );
		$mymodual = $Modualpower->find ( I ( 'id' ) );
		$this->assign ( "mymodual", $mymodual );
		
		$this->assign ( "c_letf_number", $this->c_letf_number );
		$this->display ( 'config/admin/quanxian_module' ); //输出页面模板
	}
	//配置模块权限,更新数据
	public function quanxian_module_update() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Model = M ( "quanxian_caozuomodule" );
		$power_id = I ( "power_id" );
		$module_id = I ( "module_id" );
		$param_view = I ( 'view' );
		if ($param_view != null) {
			$param_view = 1;
		} else {
			$param_view = 0;
		}
		$data ['power_id'] = $power_id;
		$data ['module_id'] = $module_id;
		$data ['view'] = $param_view;
		//检查有没有创建
		$mymodual = $Model->where ( 'module_id=' . $module_id . ' AND power_id=' . $power_id )->find ();
		if ($mymodual != false) {
			//创建了之后，更新数据
			$data ['id'] = $mymodual ['id'];
			if (false !== $Model->save ( $data )) {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新成功" . "');history.go(-1);</script>";
			} else {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新失败" . "');history.go(-1);</script>";
			}
		} else {
			//没有创建，添加数据
			if (false !== $Model->add ( $data )) {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新成功" . "');history.go(-1);</script>";
			} else {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新失败" . "');history.go(-1);</script>";
			}
		}
	}
	//配置单页和新闻权限
	public function quanxian_news() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Modualpower = M ( "quanxian_power" );
		$mymodual = $Modualpower->find ( I ( 'id' ) );
		$this->assign ( "mymodual", $mymodual );
		
		$Model = new Model (); // 实例化一个model对象 没有对应任何数据表
		

		//分类级别菜单类
		import ( '@.ORG.Tool' );
		//所有板块
		$thislistsql = " SELECT *  FROM  `xsser_news_type` order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc ";
		$thislist = $Model->query ( $thislistsql );
		$this->assign ( "thislist", Tool::tree ( $thislist ) );
		Tool::$treeList = array ();
		
		$this->assign ( "c_letf_number", $this->c_letf_number );
		$this->display ( 'config/admin/quanxian_news' ); //输出页面模板
	}
	//配置单页和新闻权限,更新数据
	public function quanxian_news_update() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Model = M ( "quanxian_caozuon" );
		$power_id = I ( "power_id" );
		$nid = I ( "nid" );
		$param_add = I ( 'add' );
		if ($param_add != null) {
			$param_add = 1;
		} else {
			$param_add = 0;
		}
		$param_del = I ( 'del' );
		if ($param_del != null) {
			$param_del = 1;
		} else {
			$param_del = 0;
		}
		$param_up = I ( 'up' );
		if ($param_up != null) {
			$param_up = 1;
		} else {
			$param_up = 0;
		}
		$param_select = I ( 'select' );
		if ($param_select != null) {
			$param_select = 1;
		} else {
			$param_select = 0;
		}
		$data ['power_id'] = $power_id;
		$data ['nid'] = $nid;
		$data ['add'] = $param_add;
		$data ['del'] = $param_del;
		$data ['up'] = $param_up;
		$data ['select'] = $param_select;
		//检查有没有创建
		$mymodual = $Model->where ( 'nid=' . $nid . ' AND power_id=' . $power_id )->find ();
		if ($mymodual != false) {
			//创建了之后，更新数据
			$data ['id'] = $mymodual ['id'];
			if (false !== $Model->save ( $data )) {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新成功" . "');history.go(-1);</script>";
			} else {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新失败" . "');history.go(-1);</script>";
			}
		} else {
			//没有创建，添加数据
			if (false !== $Model->add ( $data )) {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新成功" . "');history.go(-1);</script>";
			} else {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新失败" . "');history.go(-1);</script>";
			}
		}
	
	}
	//配置产品(普通、高级、其他自定义)权限
	public function quanxian_product() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Modualpower = M ( "quanxian_power" );
		$mymodual = $Modualpower->find ( I ( 'id' ) );
		$this->assign ( "mymodual", $mymodual );
		
		$Model = new Model (); // 实例化一个model对象 没有对应任何数据表
		

		//分类级别菜单类
		import ( '@.ORG.Tool' );
		//所有板块
		$thislistsql = "SELECT pt.*  FROM  `xsser_product_type` as pt   LEFT JOIN   `xsser_modual` as mo   ON  mo.`id`=pt.`modual_id` WHERE  mo.`modual_type`<2  order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc ";
		$thislist = $Model->query ( $thislistsql );
		$this->assign ( "thislist", Tool::tree ( $thislist ) );
		Tool::$treeList = array ();
		
		$this->assign ( "c_letf_number", $this->c_letf_number );
		$this->display ( 'config/admin/quanxian_product' ); //输出页面模板
	}
	//配置产品(普通、高级、其他自定义)权限,更新数据
	public function quanxian_product_update() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Model = M ( "quanxian_caozuop" );
		$power_id = I ( "power_id" );
		$pid = I ( "pid" );
		$param_add = I ( 'add' );
		if ($param_add != null) {
			$param_add = 1;
		} else {
			$param_add = 0;
		}
		$param_del = I ( 'del' );
		if ($param_del != null) {
			$param_del = 1;
		} else {
			$param_del = 0;
		}
		$param_up = I ( 'up' );
		if ($param_up != null) {
			$param_up = 1;
		} else {
			$param_up = 0;
		}
		$param_select = I ( 'select' );
		if ($param_select != null) {
			$param_select = 1;
		} else {
			$param_select = 0;
		}
		$data ['power_id'] = $power_id;
		$data ['pid'] = $pid;
		$data ['add'] = $param_add;
		$data ['del'] = $param_del;
		$data ['up'] = $param_up;
		$data ['select'] = $param_select;
		//检查有没有创建
		$mymodual = $Model->where ( 'pid=' . $pid . ' AND power_id=' . $power_id )->find ();
		if ($mymodual != false) {
			//创建了之后，更新数据
			$data ['id'] = $mymodual ['id'];
			if (false !== $Model->save ( $data )) {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新成功" . "');history.go(-1);</script>";
			} else {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新失败" . "');history.go(-1);</script>";
			}
		} else {
			//没有创建，添加数据
			if (false !== $Model->add ( $data )) {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新成功" . "');history.go(-1);</script>";
			} else {
				echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
				echo "<script language='javascript'>alert('" . "数据更新失败" . "');history.go(-1);</script>";
			}
		}
	
	}

}
?>