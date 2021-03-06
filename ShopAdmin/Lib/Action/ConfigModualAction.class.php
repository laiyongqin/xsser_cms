<?php
class ConfigModualAction extends BaseAction {
	
	public $c_letf_number = 7;
	
	public function index() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Modual = M ( "Modual" );
		$pt_list = $Modual->where ( ' modual_type=0 ' )->order ( 'id desc' )->select ();
		$gj_list = $Modual->where ( ' modual_type=1 ' )->order ( 'id desc' )->select ();
		
		$c_letf_number = 7;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->assign ( "pt_list", $pt_list );
		$this->assign ( "gj_list", $gj_list );
		$this->display ( 'config/modual/index' ); //输出页面模板
	}
	
	//增加模型
	public function add() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Form = D ( "Modual" );
		if ($Form->create ()) {
			//            if (false !== $Form->add()) {
			//                $this->success('数据添加成功！');
			//            } else {
			//                $this->error('数据写入错误');
			//            }
			$Model = M ( "Modual" );
			$data ["modual_type"] = I ( "modual_type" );
			$data ["database_table"] = C ( "XSSER_MY_CREATE_TABLENAME_PREFIX" ) . I ( "database_table" );
			$data ["modual_name"] = I ( "modual_name" );
			$data ["shuxing_name"] = I ( "shuxing_name" );
			$data ["shuxing_type"] = I ( "shuxing_type" );
			$data ["table_field"] = I ( "table_field" );
			$data ["active"] = 1;
			$data ["show_level"] = 500;
			
			//创建数据表
			if ($data ["modual_type"] == 1) {
				$ctModel = new Model (); // 实例化一个model对象 没有对应任何数据表
				$creat_table_sql = create_datatable ( $data ["database_table"], $data ["shuxing_type"], $data ["table_field"] );
				$ctModel->query ( $creat_table_sql );
				Log::write ( '数据库表创建  SQL: ' . $creat_table_sql );
			}
			
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
		
		$Modual = M ( "Modual" );
		$mymodual = $Modual->find ( $_GET ["id"] );
		
		$c_letf_number = 7;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->assign ( "mymodual", $mymodual );
		$this->display ( 'config/modual/update' ); //输出页面模板
	}
	
	//修改模型
	public function update() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Form = D ( "Modual" );
		if ($Form->create ()) {
			//            if (false !== $Form->save()) {
			//                 $this->success('数据更新成功！', 'index');
			//            } else {
			//                $this->error('数据写入错误');
			//            }
			$Model = M ( "Modual" );
			$data ["modual_type"] = I ( "modual_type" );
			$data ["database_table"] = I ( "database_table" );
			$data ["modual_name"] = I ( "modual_name" );
			$data ["shuxing_name"] = I ( "shuxing_name" );
			$data ["shuxing_type"] = I ( "shuxing_type" );
			$data ["table_field"] = I ( "table_field" );
			$data ["active"] = 1;
			$data ["show_level"] = 500;
			
			if (false !== $Model->where ( 'id=%d', I ( "id" ) )->data ( $data )->save ()) {
				//更新
				$this->success ( '模型修改成功！' );
			} else {
				$this->error ( '数据写入错误' );
			}
		
		} else {
			// 字段验证错误
			$this->error ( $Form->getError () );
		}
	
	}
	
	//删除数据
	public function del() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Modual = M ( "Modual" );
		if ($Modual->where ( 'id=%d', $_GET ['id'] )->delete ()) {
			$this->success ( '数据删除成功！', 'index' );
		} else {
			$this->error ( '数据写入错误' );
		}
	}
	
	//修改模型
	public function update_gaojifield_content() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Modual = M ( "Modual" );
		$mymodual = $Modual->find ( $_GET ["id"] );
		
		//$pModel = M ( ucfirst ( $mymodual ['database_table'] ) );
		//$param_array = split ( '[|]', $mymodual ['shuxing_name'] );
		$param_array_type = split ( '[|]', $mymodual ['shuxing_type'] );
		$mfclist = null;
		$param_array_table_field = split ( '[|]', $mymodual ['table_field'] );
		for($i = 0; $i < count ( $param_array_table_field ); $i ++) {
			$mfclist [$i] ['field'] = $param_array_table_field [$i];
			$mfclist [$i] ['type'] = $param_array_type [$i];
		}
		//$Mfc = M ( "ModualFieldContent" );
		//$datamfc['modual_id']=I('id');
		//$Mfclist=$Mfc->where ( $datamfc )->select();//查所有数据
		

		$c_letf_number = 7;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->assign ( "mymodual", $mymodual );
		$this->assign ( "mfclist", $mfclist );
		$this->display ( 'config/modual/updatefieldcontent' ); //输出页面模板
	}
	
	//修改模型
	public function update_gaojifield_text() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Mfc = M ( "ModualFieldContent" );
		$datamfc ['modual_id'] = I ( 'id' );
		$datamfc ['select_field'] = I ( 'field' );
		$Mfcdata = $Mfc->where ( $datamfc )->find (); //查所有数据
		

		//无数据，增加一个
		if (! $Mfcdata) {
			$datamfc ['modual_id'] = I ( 'id' );
			$datamfc ['select_field'] = I ( 'field' );
			$insertId = $Mfc->add ( $datamfc );
			$Mfcdata = $Mfc->find ( $insertId );
		}
		
		$c_letf_number = 7;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->assign ( "mymodual", $Mfcdata );
		$this->display ( 'config/modual/updatefieldcontent2' ); //输出页面模板
	}
	
	//修改模型
	public function update_gaojifield_updata() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Mfc = M ( "ModualFieldContent" );
		$datamfc ['content'] = I ( 'content' );
		
		if (false !== $Mfc->where ( 'id=%d', I ( "id" ) )->data ( $datamfc )->save ()) {
			//更新
			$this->success ( '模型修改成功！' );
		} else {
			$this->error ( '数据写入错误' );
		}
	}

}
?>