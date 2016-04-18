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
        $condition["type_id"]=35;
        $footinfo =$Modual->where($condition)->order('show_level desc,id desc')->limit(1)->find();
		$this->assign ( "footinfo", $footinfo );
		//底部联系信息
		$condition["type_id"]=38;
        $footinfo =$Modual->where($condition)->order('show_level desc,id desc')->limit(1)->find();
		$this->assign ( "footlianxiinfo", $footinfo );
//		//服务项目
//		$news_type= M("news_type");
//		$typelist_condition["type_parent"]=30;
//    	$service_list_type =$news_type->where($typelist_condition)->order ( ' show_level,id desc ' )->select ();
//    	$this->assign ( "service_list_type", $service_list_type); 
//		//行业动态
//		$condition["type_id"]=29;
//        $dongtailist =$Modual->where($condition)->limit(7)->order ( ' show_level,id desc ' )->select();
//        $this->assign ( "footdongtailist", $dongtailist ); 

        

		$product = M ( "Product" );
        //友情链接
		$condition ["type_id"] = 147;
		$jiaodiantulist = $product->where ( $condition )->order ( ' show_level,id desc ' )->select ();
		$this->assign ( "link_list", $jiaodiantulist );
		
	}
	
}
?>