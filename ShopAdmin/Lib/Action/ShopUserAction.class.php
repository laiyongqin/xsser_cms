<?php
class ShopUserAction extends ShopBaseAction {
	
	public $c_letf_number = 6;
		
	/**
	 * 注册用户模块
	 */
	//展示注册用户信息
	public function index() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Model = M ( "User" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		//$condition["type_id"]=1;
		$count = $Model->order ( ' id desc ' )->count ();
		$Page = new Page ( $count, C ( "XSSER_MY_FENYE_NUMBER" ) ); // 实例化分页类 传入总记录数
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		$list = $Model->order ( ' id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
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
		$this->display ( 'shop/user/index' ); //输出页面模板
	}
	
	//增加注册用户信息
	public function add() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Form = D ( "User" );
		if ($Form->create ()) {
			$Model = M ( "User" );
			$data ["uuid"] = create_uuid ();
			$data ["state"] = I ( "state" );
			$data ["nname"] = I ( "nname" );
			$data ["username"] = I ( "username" );
			$data ["password"] = md5 ( I ( "password" ) . $data ["uuid"] );
			$data ["sex"] = I ( "sex" );
			$data ["email"] = I ( "email" );
			$data ["face"] = I ( "face" );
			$data ["regip"] = get_client_ip ();
			$data ["regtime"] = getformat_time ( I ( 'regtime' ) );
			$data ["bak1"] = I ( "bak1" );
			if (false !== $Model->data ( $data )->add ()) {
				$this->success ( '用户添加成功！' );
			} else {
				$this->error ( '用户写入错误' );
			}
		} else {
			// 字段验证错误
			$this->error ( $Form->getError () );
		}
	}
	
	//修改注册用户信息页面
	public function update_info() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Modual = M ( "User" );
		$mymodual = $Modual->find ( $_GET ["id"] );
		$this->assign ( "mymodual", $mymodual );
		
		$c_letf_number = 6;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'shop/user/update' ); //输出页面模板
	}
	
	//修改注册用户信息
	public function update() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Form = D ( "User" );
		if ($Form->create ()) {
			$Model = M ( "User" );
			$mymodual = $Model->find ( I ( "id" ) );
			
			$data ["state"] = I ( "state" );
			$data ["nname"] = I ( "nname" );
			$data ["username"] = I ( "username" );
			$temp_data ["password"] = md5 ( I ( "password" ) . $mymodual ["uuid"] );
			if ($temp_data ['password'] != $mymodual ['password']) {
				$data ["password"] = md5 ( I ( "password" ) . $mymodual ["uuid"] );
			}
			$data ["sex"] = I ( "sex" );
			$data ["email"] = I ( "email" );
			$data ["face"] = I ( "face" );
			$data ["regtime"] = getformat_time ( I ( 'regtime' ) );
			$data ["bak1"] = I ( "bak1" );
			if (false !== $Model->where ( ' id=%d ', I ( "id" ) )->data ( $data )->save ()) {
				$this->success ( '用户修改成功！', 'index' );
			} else {
				$this->error ( '用户修改错误' );
			}
		} else {
			// 字段验证错误
			$this->error ( $Form->getError () );
		}
	}
	
	//禁用账户
	public function del() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Modual = M ( "User" );
		$mymodual = $Modual->find ( $_GET ['id'] );
		$mymodual ['state'] == 1 ? $zhi_state = 0 : $zhi_state = 1;
		if ($Modual->where ( 'id=%d', $_GET ['id'] )->setField ( 'state', $zhi_state )) {
			$this->success ( '账户状态修改成功！', 'index' );
		} else {
			$this->error ( '账户状态修改失败' );
		}
	}
	
	/**
	 * 注册用户地址模块
	 */
	
	//展示注册用户地址信息
	public function getuseraddress() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Model = M ( "Address" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		$condition ["user_id"] = I ( "id" );
		$count = $Model->where ( $condition )->order ( ' id desc,changyong desc ' )->count ();
		$Page = new Page ( $count, C ( "XSSER_MY_FENYE_NUMBER" ) ); // 实例化分页类 传入总记录数
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		$list = $Model->where ( $condition )->order ( ' id desc,changyong desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
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
		$this->display ( 'shop/user/address' ); //输出页面模板
	}
	
	//展示注册用户地址信息
	public function add_address() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Form = D ( "Address" );
		if ($Form->create ()) {
			$Model = M ( "Address" );
			$data ["user_id"] = I ( "id" );
			$data ["changyong"] = 0;
			if (I ( "changyong" ) == "1") {
				$data ["changyong"] = I ( "changyong" );
				if (! getuser_changyong ( I ( "id" ) )) {
					$this->error ( '常用地址只能设置一个哦！' );
				}
			}
			$data ["shouhuo_name"] = I ( "shouhuo_name" );
			$data ["shouhuo_tel"] = I ( "shouhuo_tel" );
			$data ["shouhuo_address"] = I ( "shouhuo_address" );
			$data ["bak1"] = I ( "bak1" );
			if (false !== $Model->data ( $data )->add ()) {
				$this->success ( '用户地址信息添加成功！' );
			} else {
				$this->error ( '用户地址信息写入错误' );
			}
		} else {
			// 字段验证错误
			$this->error ( $Form->getError () );
		}
	}
	
	//修改注册用户信息页面
	public function update_user_address_info() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		
		$Modual = M ( "Address" );
		$mymodual = $Modual->find ( $_GET ["id"] );
		$this->assign ( "mymodual", $mymodual );
		
		$c_letf_number = 6;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'shop/user/address_update' ); //输出页面模板
	}
	
	//修改注册用户地址信息
	public function update_user_address() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Form = D ( "Address" );
		if ($Form->create ()) {
			$Model = M ( "Address" );
			$data ["user_id"] = I ( "user_id" );
			if (I ( "changyong" ) == "1") {
				$data ["changyong"] = I ( "changyong" );
				if (! getuser_changyong ( I ( "user_id" ) )) {
					$this->error ( '常用地址只能设置一个哦！' );
				}
			} else {
				$data ["changyong"] = "0";
			}
			$data ["shouhuo_name"] = I ( "shouhuo_name" );
			$data ["shouhuo_tel"] = I ( "shouhuo_tel" );
			$data ["shouhuo_address"] = I ( "shouhuo_address" );
			$data ["bak1"] = I ( "bak1" );
			if (false !== $Model->where ( ' id=%d ', I ( "id" ) )->data ( $data )->save ()) {
				Log::write ( $Model->_sql () );
				$this->success ( '用户地址信息修改成功！', U ( "getuseraddress", array ('id' => I ( "user_id" ) ) ) );
			} else {
				$this->error ( '用户地址信息写入错误' );
			}
		} else {
			// 字段验证错误
			$this->error ( $Form->getError () );
		}
	}
	
	//删除数据  //这里还应该存在删除一类 也删除这一类下面的文章
	public function del_address() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Modual = M ( "Address" );
		$condition ["id"] = $_GET ["id"];
		$mymodual = $Modual->where ( $condition )->find ();
		
		if ($Modual->where ( 'id=%d', $_GET ['id'] )->delete ()) {
			$this->success ( '数据删除成功！', U ( "getuseraddress", array ("id" => $mymodual ["user_id"] ) ) );
		} else {
			$this->error ( '数据写入错误' );
		}
	}
	
	/*用户优惠券*/
	public function getusercoupon() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Model = M ( "CouponGive" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		$condition ["user_id"] = I ( "id" );
		$count = $Model->where ( $condition )->order ( ' id desc,ftime desc ' )->count ();
		$Page = new Page ( $count, C ( "XSSER_MY_FENYE_NUMBER" ) ); // 实例化分页类 传入总记录数
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		$list = $Model->where ( $condition )->order ( ' id desc,ftime desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
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
		

		//优惠券
		$CouponModual = M ( "Coupon" );
		$ctemp_list = $CouponModual->order ( 'id desc' )->select ();
		$c_list = null;
		for($i = 0; $i < count ( $ctemp_list ); $i ++) {
			$guoqi_b = strtotime ( date ( 'Y-m-d', time () ) );
			$guoqi_e = $ctemp_list [$i] ['gtime'];
			if (($guoqi_b - $guoqi_e) <= 0) {
				$c_list [$i] = $ctemp_list [$i];
			}
		}
		$this->assign ( "type_list", $c_list ); // 赋值数据集
		

		$c_letf_number = 6;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'shop/user/coupon' ); //输出页面模板
	}
	
	//添加
	public function addusercoupon() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$Form = D ( "CouponGive" );
		if ($Form->create ()) {
			$Model = M ( "CouponGive" );
			$data ["ftime"] = time ();
			$data ["user_id"] = I ( "user_id" );
			$data ["admin_id"] = session ( 'admin_id' );
			$data ["coupon_id"] = I ( "coupon_id" );
			$data ["is_use"] = 0;
			if (false !== $Model->data ( $data )->add ()) {
				$this->success ( '优惠券添加成功！' ); //没有限制优惠券是否可以添加多个  后期可根据业务需求来更改代码
			} else {
				$this->error ( '写入错误' );
			}
		} else {
			// 字段验证错误
			$this->error ( $Form->getError () );
		}
	}
	
	//删除
	public function delusercoupon() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		$cgmodel = M ( "CouponGive" );
		$tmod = $cgmodel->where ( 'id=%d', $_GET ['id'] )->find ();
		if ($cgmodel->where ( 'id=%d', $_GET ['id'] )->delete ()) {
			$this->success ( '数据删除成功！', U ( "getusercoupon", array ("id" => $tmod ['user_id'] ) ) );
		} else {
			$this->error ( '数据写入错误' );
		}
	}

}
?>