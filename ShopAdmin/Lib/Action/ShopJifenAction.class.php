<?php
class ShopJifenAction extends ShopBaseAction {
	
	public $c_letf_number = 6;
	
	//	//所有积分list
	public function index() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Model = M ( "Jifen" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		$count = $Model->order ( ' id desc,time desc ' )->count ();
		$Page = new Page ( $count, C ( "XSSER_MY_FENYE_NUMBER" ) ); // 实例化分页类 传入总记录数
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		$list = $Model->order ( ' id desc,time desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
		$page_theme = "<ul>
                     %first%
                     <li>%upPage%</li>
                     <li>%prePage%</li>
                     <li>%linkPage%</li>
                     <li>%nextPage%</li>
                     <li>%downPage%</li>
                     <li><a>%totalRow% %header% %nowPage%/%totalPage% 页</a> </li>
                     %end%
                     </ul>";
		$Page->setConfig ( 'theme', $page_theme );
		$show = $Page->show (); // 分页显示输出
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->assign ( "thislist", $list ); // 赋值数据集
		

		$c_letf_number = 6;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'shop/jifen/index' ); //输出页面模板
	}
	
	//积分改积分加载
	public function update_info() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Modual = M ( "User" );
		$mymodual = $Modual->find ( $_GET ["id"] );
		$this->assign ( "mymodual", $mymodual );
		
		$c_letf_number = 6;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'shop/jifen/update' ); //输出页面模板
	}
	
	//积分改积分加载
	public function update() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		if (strlen ( I ( "fenshu" ) ) < 1) {
			$this->error ( '分数不能为空!' );
		}
		$Model = M ( "User" );
		$mymodual = $Model->find ( I ( "id" ) );
		$data = null;
		$data_jilu = null;
		if (I ( "jifen" ) == "1") {
			$data ["jifen"] = $mymodual ['jifen'] + I ( "fenshu" );
			$data_jilu ['jilu'] = "增加" . I ( "fenshu" ) . "分";
		} else {
			$data ["jifen"] = $mymodual ['jifen'] - I ( "fenshu" );
			$data_jilu ['jilu'] = "删除" . I ( "fenshu" ) . "分";
		}
		//积分更改记录
		$data_jilu ['user_id'] = I ( "id" );
		$data_jilu ['admin_id'] = session ( 'admin_id' );
		$data_jilu ['time'] = time ();
		//$data_jilu['jilu']="管理员(".getadmin_name($data_jilu['admin_id']).")给账户(".getuser_name($data_jilu['user_id']).")的积分执行了(".$data_jilu['jilu'].")操作";
		$data_jilu ['jilu'] = "执行了(" . $data_jilu ['jilu'] . ")操作";
		$Model_jifen = M ( "Jifen" );
		$Model_jifen->add ( $data_jilu );
		//积分记录完毕
		

		if (false !== $Model->where ( 'id=%d', I ( "id" ) )->save ( $data )) {
			$this->success ( '积分更新成功！', U ( "ShopUser/index" ) );
		} else {
			$this->error ( '积分写入错误' );
		}
	}

	//	//删除数据
//	public function del(){
//		$Modual = M("Admin");
//		if ($Modual->where ( 'id=%d', $_GET ['id'] )->delete ()) {
//			$this->success ( '数据删除成功！', 'index' );
//		}else {
//			$this->error ( '数据写入错误' );
//		}
//	}


}
?>