<?php
// 本类由系统自动生成，仅供测试用途
class MobileAction extends IndexAction {
    /*案例*/
    public function anli(){
    
        $this_mytype_id=I ( "type_id" ) ?I ( "type_id" ): 23;
        if (isset($_GET["id"])){
            $this_mytype_id=I ( "id" );
        }
    
        $ModualNtype = M ( "Product_type" );
        $mymodualNtype = $ModualNtype->find ($this_mytype_id );
    
        $this_type_rank=$mymodualNtype["type_rank"];
        $this_type_type=$mymodualNtype["type_type"];
    
        $condition_fu ["id"]=$mymodualNtype["type_parent"];
        $fupt = $ModualNtype->where ( $condition_fu )->find();
        $this->assign("fupt",$fupt);
    
        $news = M ( "Product" );
    
        import ( '@.ORG.Page' ); // 导入分页类
        $list=null;
        $nowPage=null;
        $Page=null;
        $count=null;
        if($this_mytype_id==23 or $this_mytype_id==6){
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
            $Page = new Page ( $count, 8 ); // 实例化分页类 传入总记录数
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
            $Page = new Page ( $count, 8 ); // 实例化分页类 传入总记录数
            // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
            $nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
            $list = $news->where ( $condition )->order ( ' show_level,id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
        }else{
            $condition ["type_id"] = $this_mytype_id;
            $count = $news->where ( $condition )->order ( ' show_level,id desc ' )->count ();
            $Page = new Page ( $count, 8 ); // 实例化分页类 传入总记录数
            // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
            $nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
            $list = $news->where ( $condition )->order ( ' show_level,id desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
        }
    
        $page_theme ="
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
        $this->assign ( "this_type_type", $this_type_type );
        $this->assign("type_id",$this_mytype_id);
    
    
        //==菜单
        $condition2 ["type_type"] = 5;
        $condition2 ["type_rank"] = 2;
        $erjicaidan = $ModualNtype->where ( $condition2 )->order ( ' show_level,id desc ' )->select ();
        $this->assign ( "erjicaidan", $erjicaidan );
        //==菜单
    
        $this->display (); //输出页面模板
    
    }
    
    public function info() {
        $id=I ( "type_id" ) ?I ( "type_id" ): 4;
        if (isset($_GET["id"])){
            $id=I ( "id" );
        }
        $news_type = M ( "news_type" );
        $type_condition ["id"] = $id;
        $about_type = $news_type->where ( $type_condition )->find ();
        $this->assign ( "about_type", $about_type );
    
        $news = M ( "News" );
        $condition ["type_id"] = $id;
        $about = $news->where ( $condition )->find ();
        $this->assign ( "about", $about );
        $this->assign ( "type_id", $id );
    
        $this->display (); //输出页面模板
    }
   
}