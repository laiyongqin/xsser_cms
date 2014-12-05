<?php
class DanyeNewsAction extends BaseAction {

	public function index() {
		$Model = new Model(); // 实例化一个model对象 没有对应任何数据表

		//分类级别菜单类
		import('@.ORG.Tool');
		//所有板块
		//$thislistsql="SELECT pt.*  FROM  `xsser_product_type` as pt   LEFT JOIN   `xsser_modual` as mo   ON  mo.`id`=pt.`modual_id` WHERE  mo.`modual_type`=0  order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc ";
		$thislistsql="  SELECT *  FROM  `xsser_news_type`  where `type_type`=0  order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc  ";
		$thislist=$Model->query($thislistsql);
		$this->assign("thislist",Tool::tree($thislist));

        $c_letf_number=1;
		$this->assign("c_letf_number",$c_letf_number);
		$this->display('danye/news/index'); //输出页面模板
	}
	
	//修改模型
	public function update_info(){
		
		$Modual= M("News"); 
        $condition["type_id"]=$_GET["type_id"];
        $mymodual =$Modual->where($condition)->order('show_level desc,id desc')->find();
        
        $ModualNtype= M("NewsType"); 
        $mymodualNtype=$ModualNtype->find($_GET["type_id"]);
        
        //无数据，增加一个
        if(!$mymodual){
        	$data['type_id'] = $condition["type_id"];
        	$data['user_id'] = session('admin_id');
        	$data['news_title'] = $mymodualNtype["type_name"];
            $data['news_content'] = '默认内容';
            $data['news_reco'] = 1;
            $data['news_time'] = time();
            $data['news_modify_time'] = time();
            $insertId=$Modual->add($data);
            $mymodual =$Modual->find($insertId);
        }
		$this->assign("mymodual",$mymodual);
		$this->assign("mymodualNtype",$mymodualNtype);
		
	    $c_letf_number=1;
		$this->assign("c_letf_number",$c_letf_number);
		$this->display('danye/news/update'); //输出页面模板
	}
	
	//修改模型
	public function update(){
		$Form = D("News");
	    $data=null;
        if ($Form->create()){
        	$news = M("News");
            $data['type_id'] = I('type_id');
            $data['user_id'] = session('admin_id');
            $data['news_title'] = I('news_title');
            $data['news_content'] =I('news_content');
            $data['news_reco'] = I('news_reco');
            $data['news_user'] = I('news_user');
            $data['news_time'] = getformat_time(I('news_time'));
            $data['news_modify_time'] = time();
            $data['view_count'] = I('view_count');
            $data['active'] = I('active');
            $data['show_level'] = I('show_level');
            $data['bak1'] = I('bak1');
            $data['title'] = I('title');
            $data['keyword'] = I('keyword');
            $data['description'] = I('description');
            $data['bak2'] = I('bak2');
            
            if (false !== $news->where('id=%d',I('id'))->save($data)) {
                $this->success('数据更新成功！', 'index');
            } else {
                $this->error('数据写入错误');
            }
        } else {
            // 字段验证错误
            $this->error($Form->getError());
        }	
		
		
		
		
	}

}
?>