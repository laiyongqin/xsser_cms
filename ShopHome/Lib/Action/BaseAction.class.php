<?php
class BaseAction extends Action {
	public function _initialize(){
        //获取底部信息
        $this->get_foot_info();
	}

	//获取加载基本信息
	protected  function get_foot_info(){
		//获取底部信息
		$Modual= M("News"); 
        $condition["type_id"]=1;
        $footinfo =$Modual->where($condition)->order('show_level desc,id desc')->limit(1)->find();
		$this->assign ( "footinfo", $footinfo );
		//手机站底部信息
		$condition["type_id"]=10;
		$mfootinfo =$Modual->where($condition)->order('show_level desc,id desc')->limit(1)->find();
		$this->assign ( "mfootinfo", $mfootinfo );
		
		$Model = M ( "Conf" );
		$getsysinfo_goumailink = $Model->where ( " conf='%s' ", "全局立即购买链接" )->find ();
		$getsysinfo_zixunlink = $Model->where ( " conf='%s' ", "全局在线咨询链接" )->find ();
		$this->assign ( "getsysinfo_goumailink", $getsysinfo_goumailink );
		$this->assign ( "getsysinfo_zixunlink", $getsysinfo_zixunlink );
		
		
		//内页左侧联系我们信息
		$product = M ( "Product" );
		$condition ["type_id"] = 22;
		$nei_lianxi = $product->where ( $condition )->order ( ' show_level,id desc ' )->limit(1)->select ();
		$this->assign ( "nei_lianxi", $nei_lianxi );
		
		//轮播客户案例
		$condition_lunboanli ["type_id"] = 30;
		$lunboanli_list = $product->where ( $condition_lunboanli )->order ( ' show_level,id desc ' )->select ();
		$this->assign ( "lunboanli_list", $lunboanli_list );
		
// 		//底部联系信息
// 		$condition["type_id"]=1;
//         $footinfo =$Modual->where($condition)->order('show_level desc,id desc')->limit(1)->find();
// 		$this->assign ( "footlianxiinfo", $footinfo );
//		//服务项目
//		$news_type= M("news_type");
//		$typelist_condition["type_parent"]=30;
//    	$service_list_type =$news_type->where($typelist_condition)->order ( ' show_level,id desc ' )->select ();
//    	$this->assign ( "service_list_type", $service_list_type); 
//		//行业动态
//		$condition["type_id"]=29;
//        $dongtailist =$Modual->where($condition)->limit(7)->order ( ' show_level,id desc ' )->select();
//        $this->assign ( "footdongtailist", $dongtailist ); 

// 		$product = M ( "Product" );
//         //友情链接
// 		$condition ["type_id"] = 147;
// 		$jiaodiantulist = $product->where ( $condition )->order ( ' show_level,id desc ' )->select ();
// 		$this->assign ( "link_list", $jiaodiantulist );
		
	}
	
}
?>