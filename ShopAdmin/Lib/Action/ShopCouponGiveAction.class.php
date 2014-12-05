<?php
class ShopCouponGiveAction extends ShopBaseAction {
	
	/*用户优惠券发放记录*/
	public function index() {
		$Model= M("CouponGive");
        
        import('@.ORG.Page');// 导入分页类
        $count =$Model->order(' id desc,ftime desc ')->count();
        $Page = new Page($count,C("XSSER_MY_FENYE_NUMBER"));// 实例化分页类 传入总记录数
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $nowPage = isset($_GET['p'])?$_GET['p']:1;
        $list = $Model->order(' id desc,ftime desc ')->page($nowPage.','.$Page->listRows)->select();
        $page_theme="<ul>
                     %first%
                     <li>%upPage%</li>
                     <li>%prePage%</li>
                     <li>%linkPage%</li>
                     <li>%nextPage%</li>
                     <li>%downPage%</li>
                     <li><a>%totalRow% %header% %nowPage%/%totalPage% 页</a> </li>
                     %end%
                     </ul>";
        $Page->setConfig('theme',$page_theme);
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->assign("thislist",$list);// 赋值数据集
		
		
		
		
		$c_letf_number = 6;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'shop/coupongive/index' ); //输出页面模板
	}
	
	

}
?>