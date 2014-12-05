<?php
class ShopCouponAction extends ShopBaseAction {
	
	public function index() {
		$Model= M("Coupon");
		
		//所有板块		
		$thislist =$Model->order('id desc')->select();
		$this->assign("thislist",$thislist);
		
		$c_letf_number = 6;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'shop/coupon/index' ); //输出页面模板
	}
	
	//增加模型
	public function add() {
		$Form = D("Coupon");
		if ($Form->create()) {
			if (false !== $Form->add()) {
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
	public function update_info(){
		
		$Modual = M("Coupon");
		$mymodual = $Modual->find ( $_GET ["id"] );
		$this->assign ( "mymodual", $mymodual );
		
		
		$c_letf_number = 6;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'shop/coupon/update' ); //输出页面模板
	}
	
	//修改模型
	public function update() {
		$Form = D("Coupon");
		if ($Form->create()) {
			$Model= M("Coupon");
			$data['name']=I("name");
			$data['price']=I("price");
			$data['description']=I("description");
			$data['ftime']=getformat_time(I("ftime"));
			$data['gtime']=getformat_time(I("gtime"));
			if (false !== $Model->where('id=%d',I("id") )->save($data)) {
				$this->success ( '数据更新成功！', 'index'  );
			} else {
				$this->error ( '数据写入错误' );
			}
		} else {
			// 字段验证错误
			$this->error ( $Form->getError () );
		}
	}
	
	//删除数据  //这里还应该存在删除一类 也删除这一类下面的文章
	public function del(){
		$Modual = M("Coupon");
		if ($Modual->where ( 'id=%d', $_GET ['id'] )->delete ()) {
			$this->success ( '数据删除成功！', 'index' );
		}else {
			$this->error ( '数据写入错误' );
		}
	}
	

}
?>