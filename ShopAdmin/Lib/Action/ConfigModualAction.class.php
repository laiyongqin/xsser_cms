<?php
class ConfigModualAction extends BaseAction {

	public function index() {
		$Modual= M("Modual"); 
        $pt_list = $Modual->where(' modual_type=0 ')->order('id desc')->select();
        $gj_list = $Modual->where(' modual_type=1 ')->order('id desc')->select();

		$c_letf_number=7;
		$this->assign("c_letf_number",$c_letf_number);
		$this->assign("pt_list",$pt_list);
		$this->assign("gj_list",$gj_list);
		$this->display('config/modual/index'); //输出页面模板
	}
	
	//增加模型
	public function add(){
	    $Form = D("Modual");
        if ($Form->create()) {
//            if (false !== $Form->add()) {
//                $this->success('数据添加成功！');
//            } else {
//                $this->error('数据写入错误');
//            }
        	$Model= M("Modual");
			$data["modual_type"]=I("modual_type");
			$data["database_table"]=C("XSSER_MY_CREATE_TABLENAME_PREFIX").I("database_table");
			$data["modual_name"]=I("modual_name");
			$data["shuxing_name"]=I("shuxing_name");
			$data["shuxing_type"]=I("shuxing_type");
			$data["table_field"]=I("table_field");
			$data["active"]=1;
			$data["show_level"]=500;
			
        	//创建数据表
			if($data["modual_type"]==1){
				$ctModel = new Model(); // 实例化一个model对象 没有对应任何数据表
				$creat_table_sql =create_datatable ($data["database_table"], $data["shuxing_type"], $data["table_field"]);
		        $ctModel->query($creat_table_sql);
		        Log::write('数据库表创建  SQL: '.$creat_table_sql);
			}
			
			if (false !== $Model->data($data)->add()) {
				$this->success ( '数据添加成功！' );
			} else {
				$this->error ( '数据写入错误' );
			}
        } else {
            // 字段验证错误
            $this->error($Form->getError());
        }
	}
	
	//修改模型
	public function update_info(){
		
		$Modual= M("Modual"); 
        $mymodual =$Modual->find($_GET["id"]);
		
	    $c_letf_number=7;
		$this->assign("c_letf_number",$c_letf_number);
		$this->assign("mymodual",$mymodual);
		$this->display('config/modual/update'); //输出页面模板
	}
	
	//修改模型
	public function update(){
		
		$Form = D("Modual");
        if ($Form->create()) {
//            if (false !== $Form->save()) {
//                 $this->success('数据更新成功！', 'index');
//            } else {
//                $this->error('数据写入错误');
//            }
            $Model= M("Modual");
			$data["modual_type"]=I("modual_type");
			$data["database_table"]=I("database_table");
			$data["modual_name"]=I("modual_name");
			$data["shuxing_name"]=I("shuxing_name");
			$data["shuxing_type"]=I("shuxing_type");
			$data["table_field"]=I("table_field");
			$data["active"]=1;
			$data["show_level"]=500;
			
			if (false !== $Model->where('id=%d',I("id"))->data($data)->save()) {
				//更新
				$this->success ( '模型修改成功！' );
			} else {
				$this->error ( '数据写入错误' );
			}
        	
        } else {
            // 字段验证错误
            $this->error($Form->getError());
        }
		
	}
	
	//删除数据
	public function del(){
		$Modual = M("Modual");
	    if ($Modual->where('id=%d',$_GET['id'])->delete()) {
              $this->success('数据删除成功！', 'index');
        } else {
              $this->error('数据写入错误');
        }
	}
	
	

}
?>