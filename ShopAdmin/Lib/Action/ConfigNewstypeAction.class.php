<?php
class ConfigNewstypeAction extends BaseAction {

	public function index() {
		$Model = new Model(); // 实例化一个model对象 没有对应任何数据表

		//分类级别菜单类
		import('@.ORG.Tool');
		//所有板块
		//$thislistsql="SELECT pt.*  FROM  `xsser_product_type` as pt   LEFT JOIN   `xsser_modual` as mo   ON  mo.`id`=pt.`modual_id` WHERE  mo.`modual_type`=0  order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc ";
		$thislistsql=" SELECT *  FROM  `xsser_news_type` order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc ";
		$thislist=$Model->query($thislistsql);
		$this->assign("thislist",Tool::tree($thislist));
		//Tool::$treeList = array();
		//$this->assign("thislist",$thislist);


//		//分类级别菜单
//		import('@.ORG.Tool');
//        $thissql=" SELECT *  FROM  `xsser_news_type` order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc ";
//        //$thissql="SELECT pt.*  FROM  `xsser_product_type` as pt   LEFT JOIN   `xsser_modual` as mo   ON  mo.`id`=pt.`modual_id` WHERE  mo.`modual_type`=0  order by `type_type` asc,`type_rank` asc,`show_level` asc ";
//		$type_list=$Model->query($thissql);
//        $this->assign('type_list',Tool::tree($type_list));
        $this->assign('type_list',Tool::tree($thislist));


        
        $c_letf_number=7;
		$this->assign("c_letf_number",$c_letf_number);
		$this->display('config/newstype/index'); //输出页面模板
	}
	
	
	//增加模型
	public function add(){
	    $Form = D("NewsType");
	    $data=null;
        if ($Form->create()){
        	 $data['type_parent'] = $this->_post('type_parent');

        	 //不是顶级类别
        	 if($data['type_parent']!=0){
        		$fu_ProductType = M("NewsType");
        		$my_fu_producttype=$fu_ProductType->find($data['type_parent']);
        		$data['type_type'] =$my_fu_producttype['type_type'];
        		$data['type_rank'] =$my_fu_producttype['type_rank']+1 ;
        	 }else{
                 $data['type_type'] =I('type_type');
        	 }
        	
        	
        	$ProductType = M("NewsType");
            $data['type_name'] = I('type_name');
            $data['active'] = I('active');
            $data['show_level'] = I('show_level');
            $data['isshow'] = I('isshow');
            $data['bak1'] = I('bak1');
            $data['title'] = I('title');
            $data['keyword'] = I('keyword');
            $data['description'] = I('description');
            


            if (false !== $ProductType->add($data)) {
                $this->success('数据添加成功！', 'index');
            } else {
                $this->error('数据写入错误');
            }
        } else {
            // 字段验证错误
            $this->error($Form->getError());
        }
	}
	
	//修改模型
	public function update_info(){
		
		$Modual= M("NewsType"); 
        $mymodual =$Modual->find($_GET["id"]);
		$this->assign("mymodual",$mymodual);


		//分类级别菜单
		import('@.ORG.Tool');
        $thissql=" SELECT *  FROM  `xsser_news_type` order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc ";
		$type_list=$Modual->query($thissql);
        $this->assign('type_list',Tool::tree($type_list));
		
	    $c_letf_number=7;
		$this->assign("c_letf_number",$c_letf_number);
		$this->display('config/newstype/update'); //输出页面模板
	}
	
	//修改模型
	public function update(){
		$Form = D("NewsType");
	    $data=null;
        if ($Form->create()){
        	 $data['type_parent'] = I('type_parent');

        	 //不是顶级类别
        	 if($data['type_parent']!=0){
        		$fu_ProductType = M("NewsType");
        		$my_fu_producttype=$fu_ProductType->find($data['type_parent']);
        		$data['type_type'] =$my_fu_producttype['type_type'];
        		$data['type_rank'] =$my_fu_producttype['type_rank']+1 ;
        	 }else{
                 $data['type_type'] =I('type_type');
        	 }
        	
        	
        	$ProductType = M("NewsType");
            $data['type_name'] = I('type_name');
            $data['active'] = I('active');
            $data['show_level'] = I('show_level');
            $data['isshow'] = I('isshow');
            $data['bak1'] = I('bak1');
            $data['title'] = I('title');
            $data['keyword'] = I('keyword');
            $data['description'] = I('description');
            
            if (false !== $ProductType->where('id=%d',I('id'))->save($data)) {
                $this->success('数据更新成功！', 'index');
            } else {
                $this->error('数据写入错误');
            }
        } else {
            // 字段验证错误
            $this->error($Form->getError());
        }	
		
		
		
		
	}
	
	//删除数据  //这里还应该存在删除一类 也删除这一类下面的文章
	public function del(){
		$Modual = M("NewsType");
		if($Modual->where('type_parent=%d',$_GET['id'])->select()){
			$this->error('删除的项存在子类不能删除!');
		}else{
			if ($Modual->where('id=%d',$_GET['id'])->delete()) {
              $this->success('数据删除成功！', 'index');
            } else {
              $this->error('数据写入错误');
             }
		}
	}

}
?>