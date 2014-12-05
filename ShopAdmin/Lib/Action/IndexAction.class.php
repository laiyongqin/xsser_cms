<?php
class IndexAction extends BaseAction{
	public function index() {
		 $this->display (); //输出页面模板
	}

//	//	
//	//定义一个add操作方法
//	public function showadmin() {
//		trace ( '本调试信息仅页面Trace中可见' );
//		// 往流程Tab项添加trace信息
//		trace ( '页面Trace代码', '执行流程', 'INFO' );
//		//add操作方法逻辑的实现
//		$admin = M ( 'Admin' );
//		$list = $admin->select ();
//		trace ( $string, '框架名称' );
//		trace ( THINK_VERSION, '框架版本' );
//		// 抛出一些错误
//		trace ( '这是定制的错误提示信息', '错误信息', 'NOTIC' );
//		$admin = M ( 'ProductType' );
//		$list_type = $admin->select ();
//		$this->assign ( 'list_type', $list_type );
//		$this->assign ( 'list', $list );
//		$this->display (); //输出页面模板
//	}
	
	//      public function _empty($name){
	//            //把所有城市的操作解析到city方法
	//            $this->city($name);
	//      }
	//        
	//        //注意 city方法 本身是 protected 方法
	//        protected function city($name){
	//            //和$name这个城市相关的处理
	//             echo '当前城市' . $name;
	//        }
	

	public function uploadimg(){
		if (! empty ( $_FILES )) {
			import ( '@.ORG.UploadFile' );
			$config=C("XSSER_MY_UP_IMG");
			//导入上传类
			$upload = new UploadFile ($config);
			if (! $upload->upload ()) {
				//捕获上传异常
				$this->ajaxReturn ( $upload->getErrorMsg (), "上传失败!", 0 );
			} else {
				//取得成功上传的文件信息
				$uploadList = $upload->getUploadFileInfo ();
				$this->ajaxReturn ( $uploadList [0] ['savename'], "上传成功!", 1 );
			}
		}
	}
	
	
	public function uploadthumbimg() {
		if (! empty ( $_FILES )) {
			import ('@.ORG.UploadFile');
			$config=C("XSSER_MY_UP_THUMB_IMG");
			//导入上传类
			$upload = new UploadFile($config);
			if (! $upload->upload ()) {
				//捕获上传异常
				$this->ajaxReturn ( $upload->getErrorMsg (), "上传失败!", 0 );
			} else {
				//取得成功上传的文件信息
				$uploadList = $upload->getUploadFileInfo();
				if($config['is_shuiyin']){
					  import('@.ORG.Image');
                       //给m_缩略图添加水印, Image::water('原文件名','水印图片地址')
					  if($config['is_shuiyin_yuantu']){
					  	  Image::water($uploadList[0]['savepath'] . date(time(),"Y_m_d") . $uploadList[0]['savename'],$config['shuiyin_img']);
					  }
					  
					  if($config['is_shuiyin_luesuo']){
					  	  $config['thumbPrefix']=explode ( ',',$config['thumbPrefix']);
					  	  foreach ($config['thumbPrefix'] as  $value) {
					  	  	 $img_uri=explode('/',$uploadList[0]['savename']);
					  	  	 Image::water($config['thumbPath'] . $value . $img_uri[1],$config['shuiyin_img']);
					  	  	 //Log::write($config['thumbPath'] . $value . $img_uri[1] );
					  	  }
					  }
				}
				$this->ajaxReturn ( $uploadList [0] ['savename'], "上传成功!", 1 );
			}
		}
	}
	
	
	public function uploadfile(){
		if (! empty ( $_FILES )) {
			import ( '@.ORG.UploadFile' );
			$config=C("XSSER_MY_UP_FILE");
			//导入上传类
			$upload = new UploadFile ($config);
			if (! $upload->upload ()) {
				//捕获上传异常
				$this->ajaxReturn ( $upload->getErrorMsg (), "上传失败!", 0 );
			} else {
				//取得成功上传的文件信息
				$uploadList = $upload->getUploadFileInfo ();
				$this->ajaxReturn ( $uploadList [0] ['savename'], "上传成功!", 1 );
			}
		}
	}

}