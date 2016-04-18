<?php
class ShopOrderAction extends ShopBaseAction {
	
	public $c_letf_number = 6;
	
	public function index() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Model = M ( "Admin" );
		
		//所有板块		
		$thislist = $Model->order ( 'id desc' )->select ();
		$this->assign ( "thislist", $thislist );
		
		$c_letf_number = 6;
		$this->assign ( "c_letf_number", $c_letf_number );
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
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Modual = M ( "Admin" );
		$mymodual = $Modual->find ( $_GET ["id"] );
		$this->assign ( "mymodual", $mymodual );
		
		$c_letf_number = 6;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'config/admin/update' ); //输出页面模板
	}
	
	//修改模型
	public function update() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
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
		
		$Modual = M ( "Admin" );
		if ($Modual->where ( 'id=%d', $_GET ['id'] )->delete ()) {
			$this->success ( '数据删除成功！', 'index' );
		} else {
			$this->error ( '数据写入错误' );
		}
	}

}
?>