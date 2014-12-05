<?php
class PingNewsAction extends BaseAction {
	
	public function index() {
		$Model = M ( "Replyposts" );
		
		import ( '@.ORG.Page' ); // 导入分页类
		$condition ["norp"] = 0;
		$count = $Model->where ( $condition )->order ( ' time desc ' )->count ();
		$Page = new Page ( $count, C ( "XSSER_MY_FENYE_NUMBER" ) ); // 实例化分页类 传入总记录数
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset ( $_GET ['p'] ) ? $_GET ['p'] : 1;
		$list = $Model->where ( $condition )->order ( ' time desc ' )->page ( $nowPage . ',' . $Page->listRows )->select ();
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
		

		$c_letf_number = 8;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'pinglun/news/index' ); //输出页面模板
	}
	
	//修改模型
	public function update_info() {
		
		$Modual = M ( "Replyposts" );
		$mymodual = $Modual->find ( $_GET ["id"] );
		$this->assign ( "mymodual", $mymodual );
		
		if ($mymodual ['show'] == 1) {
			$rModel = M ( "Reply" );
			$myrModel = $rModel->where ( " posts_id=%d ", $mymodual ["id"] )->find ();
			$this->assign ( "myrModel", $myrModel );
		}
		
		$c_letf_number = 8;
		$this->assign ( "c_letf_number", $c_letf_number );
		$this->display ( 'pinglun/news/update' ); //输出页面模板
	}
	
	//修改模型
	public function update() {
		$Modual = M ( "Replyposts" );
		$mymodual = $Modual->find ( I('id'));
		
		if ($mymodual ['show'] == 1) {
			$rModel = M ( "Reply" );
			$updata['content']=I ( 'content' );
			if($rModel->where( " posts_id=%d ", I('id') )->save ( $updata )){
			  $this->success ( '回复更新成功！', 'index' );
			}else{
			  $this->error ( '回复更新失败(也许是您没有做任何更改!)!' );
			}
			 return ;
		}
		
		$Model = M ( "Reply" );
		$data ['user_id'] = session ( 'admin_id' );
		$data ['posts_id'] = I ( 'id' );
		$data ['show'] = 0;
		$data ['content'] = I ( 'content' );
		$data ['ip'] = get_client_ip ();
		$data ['time'] = time ();
		if (false !== $Model->add ( $data )) {
			$rpModel = M ( "Replyposts" );
			$updata ['show'] = 1;
			$rpModel->where ( 'id=%d', I ( 'id' ) )->save ( $updata );
			$this->success ( '回复成功！', 'index' );
		} else {
			$this->error ( '数据写入错误' );
		}
	
	}
	
	//删除数据  //这里还应该存在删除一类 也删除这一类下面的文章
	public function del() {
		$Modual = M ( "Replyposts" );
		if ($Modual->where ( 'id=%d', $_GET ['id'] )->delete ()) {
			//-====
			$rModel = M ( "Reply" );
			$rModel->where ( 'posts_id=%d', $_GET ['id'] )->delete ();
			$this->success ( '数据删除成功！', 'index' );
		} else {
			$this->error ( '数据写入错误' );
		}
	}

}
?>