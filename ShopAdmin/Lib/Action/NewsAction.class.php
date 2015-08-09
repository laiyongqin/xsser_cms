<?php
class NewsAction extends BaseAction {

	public function index() {
		$Model = new Model(); // 实例化一个model对象 没有对应任何数据表

		//分类级别菜单类
		import('@.ORG.Tool');
		//所有板块
		//$thislistsql="SELECT pt.*  FROM  `xsser_product_type` as pt   LEFT JOIN   `xsser_modual` as mo   ON  mo.`id`=pt.`modual_id` WHERE  mo.`modual_type`=0  order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc ";
		$thislistsql="  SELECT *  FROM  `xsser_news_type`  where `type_type`=1  order by `type_parent` asc,`type_type` asc,`type_rank` asc,`show_level` asc  ";
		$thislist=$Model->query($thislistsql);
		$this->assign("thislist",Tool::tree($thislist));

        $c_letf_number=2;
		$this->assign("c_letf_number",$c_letf_number);
		$this->display('news/index'); //输出页面模板
	}
	
	
	public function getnewslist(){
		$news= M("News");
        
        import('@.ORG.Page');// 导入分页类
        $condition["type_id"]=$_GET["type_id"];
        $count =$news->where($condition)->order(' show_level,id desc ')->count();
        $Page = new Page($count,C("XSSER_MY_FENYE_NUMBER"));// 实例化分页类 传入总记录数
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $nowPage = isset($_GET['p'])?$_GET['p']:1;
        $list = $news->where($condition)->order(' show_level,id desc ')->page($nowPage.','.$Page->listRows)->select();
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
        
        $ModualNtype= M("NewsType"); 
        $mymodualNtype=$ModualNtype->find($_GET["type_id"]);
        
        $this->assign("news_user",session('admin_name'));
		$this->assign("mymodualNtype",$mymodualNtype);
		$c_letf_number=2;
		$this->assign("c_letf_number",$c_letf_number);
		$this->display('news/newslist'); //输出页面模板
	}
	
	public function add(){
		$Form = D("News");
	    $data=null;
        if ($Form->create()){
        	$news = M("News");
            $data['type_id'] = I('type_id');
            $data['user_id'] = session('admin_id');
            $data['news_title'] = I('news_title');
            $data['news_content'] = I('news_content');
            $data['news_reco'] = I('news_reco');
            $data['news_user'] = I('news_user');
            $data['news_time'] = time();
            $data['news_modify_time'] = time();
            $data['view_count'] = I('view_count');
            $data['active'] =I('active');
            $data['show_level'] = I('show_level');
            $data['bak1'] = I('bak1');
            $data['title'] = I('title');
            $data['keyword'] = I('keyword');
            $data['description'] = I('description');
            $data['bak2'] = I('bak2');
            
            if (false !== $news->add($data)) {
                $this->success('数据添加成功！', U("getnewslist",array("type_id"=>I('type_id'))));
            } else {
                $this->error('数据写入错误');
            }
        }else {
            // 字段验证错误
            $this->error($Form->getError());
        }
	}
	
	
	
	
	
	//修改模型
	public function update_info(){
		
		$Modual= M("News"); 
        $condition["id"]=$_GET["id"];
        $mymodual =$Modual->where($condition)->find();
        
        $ModualNtype= M("NewsType"); 
        $mymodualNtype=$ModualNtype->find($mymodual["type_id"]);
        
       
		$this->assign("mymodual",$mymodual);
		$this->assign("mymodualNtype",$mymodualNtype);
		
	    $c_letf_number=2;
		$this->assign("c_letf_number",$c_letf_number);
		$this->display('news/update'); //输出页面模板
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
            $data['news_content'] = I('news_content');
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
                $this->success('数据更新成功！',U("getnewslist",array("type_id"=>I('type_id'))));
            } else {
                $this->error('数据写入错误');
            }
        }else {
            // 字段验证错误
            $this->error($Form->getError());
        }
		
	}
	
	//删除数据  //这里还应该存在删除一类 也删除这一类下面的文章
	public function del(){
		$Modual = M("News");
		$condition["id"]=$_GET["id"];
        $mymodual =$Modual->where($condition)->find();
        
		if ($Modual->where ( 'id=%d', $_GET ['id'] )->delete ()) {
			$this->success ( '数据删除成功！', U("getnewslist",array("type_id"=>$mymodual["type_id"])) );
		}else {
			$this->error ( '数据写入错误' );
		}
	}

}
?>