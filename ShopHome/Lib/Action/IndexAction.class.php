<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends BaseAction {
	public function index() {
		
		$Model = M ( "Conf" );
		$getsysinfo_title = $Model->where ( " conf='%s' ", "网站标题" )->find ();
		$getsysinfo_keywords = $Model->where ( " conf='%s' ", "网站关键词" )->find ();
		$getsysinfo_description = $Model->where ( " conf='%s' ", "网站描述" )->find ();
		$this->assign ( "getsysinfo_title", $getsysinfo_title );
		$this->assign ( "getsysinfo_keywords", $getsysinfo_keywords );
		$this->assign ( "getsysinfo_description", $getsysinfo_description );
		
		$product = M ( "Product" );
		//焦点图
		$condition ["type_id"] = 136;
		$jiaodiantulist = $product->where ( $condition )->order ( ' show_level,id desc ' )->select ();
		$this->assign ( "jiaodiantulist", $jiaodiantulist );
		//合作伙伴
		$condition ["type_id"] = 137;
		$huobanlist = $product->where ( $condition )->order ( ' show_level,id desc ' )->limit(8)->select ();
		$this->assign ( "huobanlist", $huobanlist );
//		//中部推荐案例
//		$product_type = M ( "Product_type" );
//		$condition ["type_type"] = 1;
//		$p_t_list=$product_type->field('id')->where ( $condition )->order ( ' show_level,id desc ' )->select ();
//		$pt_array=null;
//        for ($i = 0; $i < count($p_t_list); $i++) {
//        	$pt_array[$i]=$p_t_list[$i]['id'];
//        	
//        }
//		
//        //trace ( print_r($pt_array) );
//		$condition_py["type_id"] = array('in',$pt_array);;
//		$condition_py["active"] = 1;
//		$condition_py["product_reco"] = 1;
//		$tuijian_p_list = $product->where ( $condition_py )->order ( ' show_level,id desc ' )->limit(3)->select ();
//		$this->assign ( "tuijian_p_list", $tuijian_p_list );
		
		$ModualNtype = M ( "Product_type" );
        //首页氟系统
		$chaid=152;
		$condition_tp ["type_parent"] = $chaid;
		$condition_tp ["id"] = $chaid;
		$condition_tp ['_logic'] = 'OR';
		$alltypeid =$ModualNtype->where ( $condition_tp )->field('id')->select();
			//print_r($alltypeid);
		$str_tidlist="";
		foreach ($alltypeid as $key => $value) {
			$str_tidlist.= $value[id].",";
		}
		$condition_py["type_id"] =array('in',$str_tidlist);
		$condition_py["active"] = 1;
		$condition_py["product_reco"] = 1;
		$tuijian_p_list = $product->where ( $condition_py )->order ( ' show_level,id desc ' )->limit(10)->select ();
		$this->assign ( "tuijian_fu_list", $tuijian_p_list );
		//首页氨系统
		$chaid=151;
		$condition_tp ["type_parent"] = $chaid;
		$condition_tp ["id"] = $chaid;
		$condition_tp ['_logic'] = 'OR';
		$alltypeid =$ModualNtype->where ( $condition_tp )->field('id')->select();
			//print_r($alltypeid);
		$str_tidlist="";
		foreach ($alltypeid as $key => $value) {
			$str_tidlist.= $value[id].",";
		}
		$condition_py["type_id"] =array('in',$str_tidlist);
		$condition_py["active"] = 1;
		$condition_py["product_reco"] = 1;
		$tuijian_p_list = $product->where ( $condition_py )->order ( ' show_level,id desc ' )->limit(10)->select ();
		$this->assign ( "tuijian_an_list", $tuijian_p_list );
		//首页空调系统
		$chaid=176;
		$condition_tp ["type_parent"] = $chaid;
		$condition_tp ["id"] = $chaid;
		$condition_tp ['_logic'] = 'OR';
		$alltypeid =$ModualNtype->where ( $condition_tp )->field('id')->select();
			//print_r($alltypeid);
		$str_tidlist="";
		foreach ($alltypeid as $key => $value) {
			$str_tidlist.= $value[id].",";
		}
		$condition_py["type_id"] =array('in',$str_tidlist);
		$condition_py["active"] = 1;
		$condition_py["product_reco"] = 1;
		$tuijian_p_list = $product->where ( $condition_py )->order ( ' show_level,id desc ' )->limit(10)->select ();
		$this->assign ( "tuijian_kongtiao_list", $tuijian_p_list );
		
		//公司新闻
		$condition ["type_id"] = 143;
		$dongtaione = $product->where ( $condition )->limit ( 0,1 )->order ( ' show_level,id desc ' )->select ();
		$dongtailist = $product->where ( $condition )->limit ( 1,3 )->order ( ' show_level,id desc ' )->select ();
		$this->assign ( "dongtailist", $dongtailist );
		$this->assign ( "dongtaione", $dongtaione );
		//行业资讯
		$condition ["type_id"] = 144;
		$zixunone = $product->where ( $condition )->limit ( 0,1 )->order ( ' show_level,id desc ' )->select ();
		$zixunlist = $product->where ( $condition )->limit ( 1,3 )->order ( ' show_level,id desc ' )->select ();
		$this->assign ( "zixunlist", $zixunlist );
		$this->assign ( "zixunone", $zixunone );
		
		$this->display (); //输出页面模板
	}
	
	public function about() {
		$id = 25;
		$news_type = M ( "news_type" );
		$type_condition ["id"] = $id;
		$about_type = $news_type->where ( $type_condition )->find ();
		$this->assign ( "about_type", $about_type );
		
		$news = M ( "News" );
		$condition ["type_id"] = $id;
		$about = $news->where ( $condition )->find ();
		$this->assign ( "about", $about );
		
		
		//
		$product = M ( "Product" );
		$condition ["type_id"] =148;
		$xianchanglist = $product->where ( $condition )->order ( ' show_level,id desc ' )->limit(30)->select ();
		$this->assign ( "xianchanglist", $xianchanglist );
		
		$condition ["type_id"] =149;
		$xianchanglist1 = $product->where ( $condition )->order ( ' show_level,id desc ' )->limit(0,2)->select ();
		$this->assign ( "jungonglist1", $xianchanglist1 );
		
		$condition ["type_id"] =149;
		$xianchanglist2 = $product->where ( $condition )->order ( ' show_level,id desc ' )->limit(2,3)->select ();
		$this->assign ( "jungonglist2", $xianchanglist2 );
		
		
		
		
		$this->display (); //输出页面模板
	}
	
	public function partner(){
		$this_mytype_id=I ( "type_id" );
		$this_mytype_id=I ( "type_id" ) ?I ( "type_id" ): 137;
		
		$news = M ( "Product" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		$condition ["type_id"] = $this_mytype_id;
		$count = $news->where ( $condition )->order ( ' show_level,id desc ' )->count ();
		$Page = new Page ( $count, C ( "XSSER_MY_FENYE_NUMBER" ) ); // 实例化分页类 传入总记录数
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		$list = $news->where ( $condition )->order ( ' show_level,id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
		$page_theme = "
                     %first%
                     %upPage%
                     %prePage%
                     %linkPage%
                     %nextPage%
                     %downPage%
                     &nbsp;&nbsp;&nbsp;  %totalRow% %header% %nowPage%/%totalPage% 页 
                     %end%
                     ";
		$Page->setConfig ( 'theme', $page_theme );
		$show = $Page->show (); // 分页显示输出
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->assign ( "thislist", $list ); // 赋值数据集
		

		$ModualNtype = M ( "Product_type" );
		$mymodualNtype = $ModualNtype->find ( $this_mytype_id );
		
		$this->assign ( "mymodualNtype", $mymodualNtype );
		$this->assign("type_id",$this_mytype_id);
		$this->display (); //输出页面模板
	}
	//OK
	public function partner_show() {
		$Modual = M ( "Product" );
		$condition ["id"] = $_GET ["id"];
		$mymodual = $Modual->where ( $condition )->find ();
		
		$ModualNtype = M ( "ProductType" );
		$mymodualNtype = $ModualNtype->find ( $mymodual ["type_id"] );
		
		$this->assign ( "mymodual", $mymodual );
		$this->assign ( "mymodualNtype", $mymodualNtype );
		$this->assign("type_id",$mymodual ["type_id"]);
		$this->display (); //输出页面模板
	}
	
	//OK
	public function service() {
		$id = 30;
		$news_type = M ( "news_type" );
		$type_condition["id"] = $id;
		$about_type = $news_type->where ( $type_condition )->find ();
		$this->assign ( "about_type", $about_type );
		
//		$news = M ( "News" );
//		$condition ["type_id"] = $id;
//		$about = $news->where ( $condition )->find ();
//		$this->assign ( "about", $about );
//		
		//案例列表
		$ProductType = M("ProductType");
		$product_type_list=$ProductType->where('type_parent=%d',138)->select();
    	$this->assign ( "product_type_list", $product_type_list); 
		
		//案例
    	$this_mytype_id=I ( "type_id" );
		$this_mytype_id=I ( "type_id" ) ?I ( "type_id" ): 139;
		
		$news = M ( "Product" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		$condition ["type_id"] = $this_mytype_id;
		$count = $news->where ( $condition )->order ( ' show_level,id desc ' )->count ();
		//$Page = new Page ( $count, C ( "XSSER_MY_FENYE_NUMBER" ) ); // 实例化分页类 传入总记录数
		$Page = new Page ( $count, 8); // 实例化分页类 传入总记录数
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		$list = $news->where ( $condition )->order ( ' show_level,id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
		$page_theme = "
                     %first%
                     %upPage%
                     %prePage%
                     %linkPage%
                     %nextPage%
                     %downPage%
                     &nbsp;&nbsp;&nbsp;  %totalRow% %header% %nowPage%/%totalPage% 页 
                     %end%
                     ";
		$Page->setConfig ( 'theme', $page_theme );
		$show = $Page->show (); // 分页显示输出
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->assign ( "thislist", $list ); // 赋值数据集
		$this->assign ( 'this_type_id', $this_mytype_id );

		$this->display (); //输出页面模板
	}
	//OK
	public function service_show() {
		$Modual = M ( "Product" );
		$condition ["id"] = $_GET ["id"];
		$mymodual = $Modual->where ( $condition )->find ();
		
	    //案例列表
		$ProductType = M("ProductType");
		$product_type_list=$ProductType->where('type_parent=%d',138)->select();
    	$this->assign ( "product_type_list", $product_type_list); 
		
		$ModualNtype = M ( "ProductType" );
		$mymodualNtype = $ModualNtype->find ( $mymodual ["type_id"] );
		
		$this->assign ( "mymodual", $mymodual );
		$this->assign ( "mymodualNtype", $mymodualNtype );
		$this->assign("this_type_id",$mymodual ["type_id"]);
		$this->display (); //输出页面模板
	}

	//OK
	public function news() {
		$this_mytype_id=I ( "type_id" );
		$this_mytype_id=I ( "type_id" ) ?I ( "type_id" ): 143;
		
		$news = M ( "Product" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		$condition ["type_id"] = $this_mytype_id;
		$count = $news->where ( $condition )->order ( ' show_level,id desc ' )->count ();
		$Page = new Page ( $count, C ( "XSSER_MY_FENYE_NUMBER" ) ); // 实例化分页类 传入总记录数
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		$list = $news->where ( $condition )->order ( ' show_level,id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
		$page_theme = "
                     %first%
                     %upPage%
                     %prePage%
                     %linkPage%
                     %nextPage%
                     %downPage%
                     &nbsp;&nbsp;&nbsp;  %totalRow% %header% %nowPage%/%totalPage% 页 
                     %end%
                     ";
		$Page->setConfig ( 'theme', $page_theme );
		$show = $Page->show (); // 分页显示输出
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->assign ( "thislist", $list ); // 赋值数据集
		

		$ModualNtype = M ( "Product_type" );
		$mymodualNtype = $ModualNtype->find ( $this_mytype_id );
		
		$this->assign ( "mymodualNtype", $mymodualNtype );
		$this->assign("type_id",$this_mytype_id);
		$this->display (); //输出页面模板
	}
	//OK
	public function news_show() {
		$Modual = M ( "Product" );
		$condition ["id"] = $_GET ["id"];
		$mymodual = $Modual->where ( $condition )->find ();
		
		$ModualNtype = M ( "ProductType" );
		$mymodualNtype = $ModualNtype->find ( $mymodual ["type_id"] );
		
		$this->assign ( "mymodual", $mymodual );
		$this->assign ( "mymodualNtype", $mymodualNtype );
		$this->assign("type_id",$mymodual ["type_id"]);
		$this->display (); //输出页面模板
	}
	
	//OK
	public function dingzhi_post() {
		
		$return_str ['info'] = "";
		if (strlen ( $_POST ['zb_name'] ) == 0) {
			$return_str ['info'] .= "姓名不能为空!\n\n";
		}
		if (strlen ( $_POST ['zb_tel'] ) == 0) {
			$return_str ['info'] .= "联系方式不能为空!\n\n";
		}
		if (strlen ( $_POST ['zb_liuyan'] ) == 0) {
			$return_str ['info'] .= "留言内容不能为空!\n\n";
		}
		if (strlen ( $return_str ['info'] ) == "") {
			
			$product = M ( "product" );
			$this_post_type_id = 146; //板块ID
			
			//查找IP 不能超过5条
			$condition["type_id"]=$this_post_type_id;
			$condition["ip"]=get_client_ip ();		    
			$count = $product->where ( $condition )->count ();
			if($count>=5){
				$return_str ['info']="你的IP已经提交了五次信息,已经被锁定了,暂时无法提交!\n";
				$this->ajaxReturn($return_str);
			}
			
			
			$name = htmlspecialchars ( str_ireplace ( "|", "", $_POST ['zb_name'] ), ENT_QUOTES );
			$tel = htmlspecialchars ( str_ireplace ( "|", "", $_POST ['zb_tel'] ), ENT_QUOTES );
			$liuyan = htmlspecialchars ( str_ireplace ( "|", "", $_POST ['zb_liuyan'] ), ENT_QUOTES );
			
//			$safe_fuwuxiangmu = $_POST ['web_leixing'];
//			//$var=explode("|",$safe_fuwuxiangmu);
//			$web_leixing = "";
//			for($i = 0; $i < count ( $safe_fuwuxiangmu ); $i ++) {
//				$web_leixing .= htmlspecialchars ( str_ireplace ( "|", "", $safe_fuwuxiangmu [$i]['value'] ), ENT_QUOTES ) . "  ";
//			}
//			
			
			$data ["type_id"] = $this_post_type_id;
			$data ["product_title"] = "客户名字:" . $name . " 电话:" . $tel . " ";
			$data ["product_time"] = time ();
			$data ["param"] = "$name|$tel|$liuyan ";
			$data ["active"] = 0;
			$data ["show_level"] = 500;
			$data ["ip"] = get_client_ip ();
			
			if (false !== $product->data ( $data )->add ()) {
				$return_str ['info']="提交成功,请等待审核!\n";
			} else {
				$return_str ['info']="系统开小差,麻烦您电话联系我们...!\n";
			}
			
			$this->ajaxReturn($return_str);
			
		}else{
			$this->ajaxReturn($return_str);
		}
		
		

	}
	
	
	//OK
	public function contact() {
		$id = 26;
		$news_type = M ( "news_type" );
		$type_condition ["id"] = $id;
		$about_type = $news_type->where ( $type_condition )->find ();
		$this->assign ( "about_type", $about_type );
		
		$news = M ( "News" );
		$condition ["type_id"] = $id;
		$about = $news->where ( $condition )->find ();
		$this->assign ( "about", $about );
		$this->display (); //输出页面模板
	}
	
	
	/*案例*/
	public function anli(){
		$this_mytype_id=I ( "type_id" );
		$this_mytype_id=I ( "type_id" ) ?I ( "type_id" ): 150;
		
		$ModualNtype = M ( "Product_type" );
		$mymodualNtype = $ModualNtype->find ($this_mytype_id );
		
		$this_type_rank=$mymodualNtype["type_rank"];
		
		$condition_fu ["id"]=$mymodualNtype["type_parent"];
		$fupt = $ModualNtype->where ( $condition_fu )->find();
		$this->assign("fupt",$fupt);
		
		$news = M ( "Product" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		$list=null;
		$nowPage=null;
		$Page=null;
		$count=null;
		if($this_mytype_id==150){
			//查找所有type_type分类的产品
			$condition_tp ["type_type"] = $mymodualNtype['type_type'];
			//$condition_tp ["type_rank"] = 3;
			$alltypeid =$ModualNtype->where ( $condition_tp )->field('id')->select();
			//print_r($alltypeid);
			$str_tidlist="";
			foreach ($alltypeid as $key => $value) {
				$str_tidlist.= $value[id].",";
			}
			$condition ["type_id"] =array('in',$str_tidlist);
		    $count = $news->where ( $condition )->order ( ' show_level,id desc ' )->count ();
		    $Page = new Page ( $count, 9 ); // 实例化分页类 传入总记录数
		    // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		    $nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		    $list = $news->where ( $condition )->order ( ' show_level,id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
		}else if($this_type_rank==2){
			//查找所有type_type分类的产品
			$condition_tp ["type_parent"] = $this_mytype_id;
			//$condition_tp ["type_rank"] = 3;
			$condition_tp ["id"] = $this_mytype_id;
			$condition_tp ['_logic'] = 'OR';
			$alltypeid =$ModualNtype->where ( $condition_tp )->field('id')->select();
			//print_r($alltypeid);
			$str_tidlist="";
			foreach ($alltypeid as $key => $value) {
				$str_tidlist.= $value[id].",";
			}
			$condition ["type_id"] =array('in',$str_tidlist);
		    $count = $news->where ( $condition )->order ( ' show_level,id desc ' )->count ();
		    $Page = new Page ( $count, 9 ); // 实例化分页类 传入总记录数
		    // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		    $nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		    $list = $news->where ( $condition )->order ( ' show_level,id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
		}else{
			$condition ["type_id"] = $this_mytype_id;
		    $count = $news->where ( $condition )->order ( ' show_level,id desc ' )->count ();
		    $Page = new Page ( $count, 9 ); // 实例化分页类 传入总记录数
		    // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		    $nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		    $list = $news->where ( $condition )->order ( ' show_level,id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
		}

		$page_theme = "
                     %first%
                     %upPage%
                     %prePage%
                     %linkPage%
                     %nextPage%
                     %downPage%
                     &nbsp;&nbsp;&nbsp;  %totalRow% %header% %nowPage%/%totalPage% 页 
                     %end%
                     ";
		$Page->setConfig ( 'theme', $page_theme );
		$show = $Page->show (); // 分页显示输出
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->assign ( "thislist2", $list ); // 赋值数据集
		


		
		$this->assign ( "mymodualNtype", $mymodualNtype );
		$this->assign ( "this_type_rank", $this_type_rank );
		$this->assign("type_id",$this_mytype_id);
		
		
		//==菜单
		$condition2 ["type_type"] = 6;
		$condition2 ["type_rank"] = 2;
		$erjicaidan = $ModualNtype->where ( $condition2 )->order ( ' show_level,id desc ' )->select ();
		$this->assign ( "erjicaidan", $erjicaidan );
		//==菜单
		
		$this->display (); //输出页面模板 
		
	}
	
	
	/*案例*/
	public function anli_show(){
		
		$Modual = M ( "Product" );
		$condition ["id"] = $_GET ["id"];
		$mymodual = $Modual->where ( $condition )->find ();
		
		
		
		$ModualNtype = M ( "ProductType" );
		$mymodualNtype = $ModualNtype->find ( $mymodual ["type_id"] );
		$this_type_rank=$mymodualNtype["type_rank"];
		$this->assign ( "this_type_rank", $this_type_rank );
		
		$condition_fu ["id"]=$mymodualNtype["type_parent"];
		$fupt = $ModualNtype->where ( $condition_fu )->find();
		$this->assign("fupt",$fupt);
		
		//==菜单
		$condition2 ["type_type"] = 6;
		$condition2 ["type_rank"] = 2;
		$erjicaidan = $ModualNtype->where ( $condition2 )->order ( ' show_level,id desc ' )->select ();
		$this->assign ( "erjicaidan", $erjicaidan );
		//==菜单
		
		$this->assign ( "mymodual", $mymodual );
		$this->assign ( "mymodualNtype", $mymodualNtype );
		$this->assign("type_id",$mymodual ["type_id"]);
		
		
		//上一篇  
      $front=$Modual->where(" id<".I("id")." and type_id=".$mymodual ["type_id"])->order('id desc')->limit('1')->find();  
      $this->assign('front',$front);  
       //下一篇  
       $after=$Modual->where(" id>".I("id")." and type_id=".$mymodual ["type_id"])->order('id desc')->limit('1')->find();   
       $this->assign('after',$after);
		
		
		$this->display (); //输出页面模板
		
	}
	
	/*案例*/
	public function s(){
		$news = M ( "Product" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		$list=null;
		$nowPage=null;
		$Page=null;
		$count=null;
			//查找所有type_type分类的产品
			$so=I ( "so" );
			$ModualNtype = M ( "ProductType" );
			$condition_tp ["type_type"] = 6;
			$alltypeid =$ModualNtype->where ( $condition_tp )->field('id')->select();
			//print_r($alltypeid);
			$str_tidlist="";
			foreach ($alltypeid as $key => $value) {
				$str_tidlist.= $value[id].",";
			}
			
			$condition ["type_id"] =array('in',$str_tidlist);
			$condition['_string']='(product_title like "%'.$so.'%")  OR (product_content like "%'.$so.'%") OR (param like "%'.$so.'%")';
		    $count = $news->where ( $condition )->order ( ' show_level,id desc ' )->count ();
		    $Page = new Page ( $count, 9 ); // 实例化分页类 传入总记录数
		    // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		    $nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		    $list = $news->where ( $condition )->order ( ' show_level,id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();

		$page_theme = "
                     %first%
                     %upPage%
                     %prePage%
                     %linkPage%
                     %nextPage%
                     %downPage%
                     &nbsp;&nbsp;&nbsp;  %totalRow% %header% %nowPage%/%totalPage% 页 
                     %end%
                     ";
		$Page->setConfig ( 'theme', $page_theme );
		$show = $Page->show (); // 分页显示输出
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->assign ( "thislist2", $list ); // 赋值数据集
		
		
		
		//==菜单

		$condition2 ["type_type"] = 6;
		$condition2 ["type_rank"] = 2;
		$erjicaidan = $ModualNtype->where ( $condition2 )->order ( ' show_level,id desc ' )->select ();
		$this->assign ( "erjicaidan", $erjicaidan );
		//==菜单
		
		$this->display (); //输出页面模板 
		
	}
	
	
	

}