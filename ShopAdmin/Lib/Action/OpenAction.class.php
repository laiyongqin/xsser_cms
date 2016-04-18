<?php
class OpenAction extends Action {
	public function _initialize(){
        //获取系统信息
        //$this->getsysinfo(); 
	}

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
	
	public function qiniu_uploadfile(){
		//单页板块模板测试过这个功能
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
				//=============================上传到7牛空间
			require_once('./Public/qiniu/io.php');
			require_once('./Public/qiniu/rs.php');
			$file = APP_WEB_ROOT."/Uploads/".$uploadList [0] ['savename'];
			
			$bucket = "kehu";
			$qiniu_url="http://7xl40j.com1.z0.glb.clouddn.com/";
			$key1 = $uploadList [0] ['savename'];
			$accessKey = 'j8H3_O3htqfaVChPv86oFr1UCW0On9HWBX034Toy';
			$secretKey = 'a8u2E0O5dct3atXLjY3bpIa2gZe03Nv26UZEy_R7';
			
			Qiniu_SetKeys($accessKey, $secretKey);
			$putPolicy = new Qiniu_RS_PutPolicy($bucket);
			$upToken = $putPolicy->Token(null);
			$putExtra = new Qiniu_PutExtra();
			$putExtra->Crc32 = 1;
			list($ret, $err) = Qiniu_PutFile($upToken, $key1, $file, $putExtra);
			if ($err !== null) {
				//捕获上传异常
				$this->ajaxReturn ( $err , "上传失败!", 0 );
			} else {
				$this->ajaxReturn ( $qiniu_url.$ret['key'], "上传到七牛成功!", 1 );
			}
				//=============================
				
			}
		}
	}
	
	
}
?>