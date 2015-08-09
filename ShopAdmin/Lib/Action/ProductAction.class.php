<?php
class ProductAction extends BaseAction {
	
	public function index() {
		$Model = new Model (); // 实例化一个model对象 没有对应任何数据表
		

		//分类级别菜单类
		import ( '@.ORG.Tool' );
		//所有板块
		$thislistsql = "SELECT pt.*  FROM  `xsser_product_type` as pt   LEFT JOIN   `xsser_modual` as mo   ON  mo.`id`=pt.`modual_id` WHERE  mo.`modual_type`=0 AND pt.`type_type` <100  order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc ";
		$thislist = $Model->query ( $thislistsql );
		$this->assign ( "thislist", Tool::tree ( $thislist ) );
		Tool::$treeList = array ();
		//$this->assign("thislist",$thislist);
		

		$c_letf_number = 3;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'product/index' ); //输出页面模板
	}
	
	public function getlist() {
		$news = M ( "Product" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		$condition ["type_id"] = $_GET ["type_id"];
		$count = $news->where ( $condition )->order ( ' show_level,id desc ' )->count ();
		$Page = new Page ( $count, C ( "XSSER_MY_FENYE_NUMBER" ) ); // 实例化分页类 传入总记录数
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		$list = $news->where ( $condition )->order ( ' show_level,id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
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
		

		$ModualNtype = M("ProductType");
		$mymodualNtype = $ModualNtype->find ( $_GET ["type_id"] );
		

		//所有同级板块
		//$this_type_list_tuijian=$ModualNtype->where(" type_type=%d ",$mymodualNtype['type_type']);
		$Model = new Model (); // 实例化一个model对象 没有对应任何数据表
		$this_type_list_tuijian=$Model->query(" SELECT * FROM `xsser_product_type` WHERE `type_type`=$mymodualNtype[type_type] ");
		$this->assign("this_type_list_tuijian",$this_type_list_tuijian);
		
		
		$this->assign ( "news_user", session ( 'admin_name' ) );
		$this->assign ( "mymodualNtype", $mymodualNtype );
		$muxing_shuxing_name=split('[|]',$mymodualNtype['shuxing_name']);
		$muxing_shuxing_type=split('[|]',$mymodualNtype['shuxing_type']);
		$this->assign("muxing_shuxing_name",$muxing_shuxing_name);
		$this->assign("muxing_shuxing_type",$muxing_shuxing_type);
//		trace ( $muxing_shuxing_name );
//		trace ( $muxing_shuxing_type );
		$c_letf_number = 3;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'product/list' ); //输出页面模板
	}
	
	public function add() {
		$Form = D ( "Product" );
		$data = null;
		if ($Form->create ()) {
			$products = M ( "Product" );
			$data ['type_id'] = I( 'type_id' );
			$ModualNtype = M("ProductType");
		    $mymodualNtype = $ModualNtype->find ( $data ['type_id'] );
			
			$data ['user_id'] = session ( 'admin_id' );
			$data ['product_title'] = I( 'product_title' );
			$data ['product_pic_s'] = I( 'product_pic_s' );
			$data ['product_pic_b'] = I( 'product_pic_b' );
			$data ['product_content'] = I( 'product_content' );
			$data ['product_reco'] = I( 'product_reco' );
			$data ['product_user'] = I( 'product_user' );
			$data ['product_time'] = getformat_time(I('product_time'));
			//Log::write(I('product_time'));
			$data ['product_modify_time'] = time ();
			$data ['view_count'] = I( 'view_count' );
			
			$param_array=split('[|]',$mymodualNtype['shuxing_name']);
			$param="";
	        for($i=0;$i<count($param_array);$i++){
	        	if($i==0){
	        		$param=str_ireplace("|","",$_POST['param'.$i]);
	        	}else{
	        		$param=$param."|".str_ireplace("|","",$_POST['param'.$i]);
	        	}
	        }
	        $data ['param'] = $param;
	        
	        $param_tuijian=$this->_post('tuijian_id_group');
	        $param_tuijian_str="";
			for($i=0;$i<count($param_tuijian);$i++){
	        	if($i==0){
	        		$param_tuijian_str=str_ireplace("|","",$param_tuijian[$i]);
	        	}else{
	        		$param_tuijian_str=$param_tuijian_str."|".str_ireplace("|","",$param_tuijian[$i]);
	        	}
	        }
	        $data ['tuijian_id_group'] = $param_tuijian_str;
	        
			$data ['active'] = I( 'active' );
			$data ['show_level'] = I( 'show_level' );
			$data ['title'] = I( 'title' );
			$data ['keyword'] = I( 'keyword' );
			$data ['description'] = I( 'description' );
			$data ['bak2'] = I( 'bak2' );
			
			if (false !== $products->add ( $data )) {
				$this->success ( '数据添加成功！', U ( "getlist", array ("type_id" => I( 'type_id' ) ) ) );
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
		
		$Modual = M ( "Product" );
		$condition ["id"] = $_GET ["id"];
		$mymodual = $Modual->where ( $condition )->find ();
		
		$ModualNtype = M ( "ProductType" );
		$mymodualNtype = $ModualNtype->find ( $mymodual ["type_id"] );
		
		$this->assign ( "mymodual", $mymodual );
		$this->assign ( "mymodualNtype", $mymodualNtype );
		
		
		//所有同级板块
		//$this_type_list_tuijian=$ModualNtype->where(" type_type=%d ",$mymodualNtype['type_type']);
		$Model = new Model (); // 实例化一个model对象 没有对应任何数据表
		$this_type_list_tuijian=$Model->query(" SELECT * FROM `xsser_product_type` WHERE `type_type`=$mymodualNtype[type_type] ");
		$this->assign("this_type_list_tuijian",$this_type_list_tuijian);
		
		$tuijian_id_group=split('[|]',$mymodual['tuijian_id_group']);
		$muxing_shuxing_name=split('[|]',$mymodualNtype['shuxing_name']);
		$muxing_shuxing_type=split('[|]',$mymodualNtype['shuxing_type']);
		$this->assign("muxing_shuxing_name",$muxing_shuxing_name);
		$this->assign("muxing_shuxing_type",$muxing_shuxing_type);
		$this->assign("tuijian_id_group",$tuijian_id_group);
		//trace($tuijian_id_group);
		
		$c_letf_number =3;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'product/update' ); //输出页面模板
	}
	
	//修改模型
	public function update() {
		$Form = D ( "Product" );
		$data = null;
		if ($Form->create ()) {
			$products = M ( "Product" );
			$data ['type_id'] = I( 'type_id' );
			$ModualNtype = M("ProductType");
		    $mymodualNtype = $ModualNtype->find ( $data ['type_id'] );
			
			$data ['user_id'] = session ( 'admin_id' );
			$data ['product_title'] = I( 'product_title' );
			$data ['product_pic_s'] = I( 'product_pic_s' );
			$data ['product_pic_b'] = I( 'product_pic_b' );
			$data ['product_content'] = I( 'product_content' );
			$data ['product_reco'] = I( 'product_reco' );
			$data ['product_user'] = I( 'product_user' );
			$data ['product_time'] = getformat_time(I('product_time'));
			//Log::write(I('product_time'));
			$data ['product_modify_time'] = time ();
			$data ['view_count'] = I ( 'view_count' );
			
			$param_array=split('[|]',$mymodualNtype['shuxing_name']);
			$param="";
	        for($i=0;$i<count($param_array);$i++){
	        	if($i==0){
	        		$param=str_ireplace("|","",$_POST['param'.$i]);
	        	}else{
	        		$param=$param."|".str_ireplace("|","",$_POST['param'.$i]);
	        	}
	        }
	        $data ['param'] = $param;
	        
	        $param_tuijian=I('tuijian_id_group');
	        $param_tuijian_str="";
			for($i=0;$i<count($param_tuijian);$i++){
	        	if($i==0){
	        		$param_tuijian_str=str_ireplace("|","",$param_tuijian[$i]);
	        	}else{
	        		$param_tuijian_str=$param_tuijian_str."|".str_ireplace("|","",$param_tuijian[$i]);
	        	}
	        }
	        $data ['tuijian_id_group'] = $param_tuijian_str;
	        
			$data ['active'] = I ( 'active' );
			$data ['show_level'] = I( 'show_level' );
			$data ['title'] = I( 'title' );
			$data ['keyword'] = I( 'keyword' );
			$data ['description'] = I( 'description' );
			$data ['bak2'] = I( 'bak2' );
			
			if (false !== $products->where ( 'id=%d', I( 'id' ) )->save ( $data )) {
				$this->success ( '数据更新成功！', U ( "getlist", array ("type_id" => $data ['type_id'] )));
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
		$Modual = M ( "Product" );
		$condition ["id"] = $_GET ["id"];
		$mymodual = $Modual->where ( $condition )->find ();
		
		if ($Modual->where ( 'id=%d', $_GET ['id'] )->delete ()) {
			$this->success ( '数据删除成功！', U ( "getlist", array ("type_id" => $mymodual ["type_id"] ) ) );
		} else {
			$this->error ( '数据写入错误' );
		}
	}

}
?>