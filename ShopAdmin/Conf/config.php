<?php
return array(
	//'配置项'=>'配置值'
	/* 默认设定 */
	'DEFAULT_MODULE'     => 'Index', //默认模块     配置参数不区分大小写（因为无论大小写定义都会转换成小写）='default_module' 
   	'DEFAULT_ACTION'   => 'index', // 默认操作名称
	'DEFAULT_CHARSET'  => 'utf-8', // 默认输出编码
	'DEFAULT_TIMEZONE' => 'Asia/Shanghai', // 默认时区
	'DEFAULT_THEME'    => 'admin', // 默认模板主题名称
	'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息
	
    /*session*/
    'SESSION_AUTO_START' => true, //是否开启session

	/* 数据库设置 */
	'DB_TYPE'            => 'mysql', // 数据库类型
	'DB_HOST'            => 'localhost', // 服务器地址
	'DB_NAME'            => 'xsser_cms', // 数据库名
	'DB_USER'            => 'root', // 用户名
	'DB_PWD'             => '', // 密码
	'DB_PORT'            => 3306, // 端口
	'DB_PREFIX'          => 'xsser_', // 数据库表前缀
	'DB_SUFFIX'          => '', // 数据库表后缀
	'DB_FIELDTYPE_CHECK' => false, // 是否进行字段类型检查
	'DB_FIELDS_CACHE'    => FALSE, // 启用字段缓存
	'DB_CHARSET'         => 'utf8', // 数据库编码默认采用utf8
	'DB_DEPLOY_TYPE'     => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	'DB_RW_SEPARATE'     => false, // 数据库读写是否分离 主从式有效


	/* 分页设置 */
	'PAGE_ROLLPAGE' => 5, // 分页显示页数
	'PAGE_LISTROWS' => 20, // 分页每页显示记录数

	/* 模板引擎设置 */
    'TEMPLATE_CHARSET'	=>'utf-8', // 模板模板编码
    'OUTPUT_CHARSET'	=>'utf-8', // 默认输出编码
//	'TMPL_ACTION_ERROR'   => 'Public:info', // 默认错误跳转对应的模板文件
//	'TMPL_ACTION_SUCCESS' => 'Public:info', // 默认成功跳转对应的模板文件
	'TMPL_TEMPLATE_SUFFIX'=>'.html',
    'TMPL_PARSE_STRING' =>  array( // 添加输出替换
        '__UPLOAD__'    =>  __ROOT__.'/Uploads',
    ),
	// Think模板引擎标签库相关设定
	'TAGLIB_BEGIN' => '<', // 标签库标签开始标记
	'TAGLIB_END'   => '>', // 标签库标签结束标记
	
	/* 系统变量名称设置 */
	'VAR_MODULE' => 'm', // 默认模块获取变量
	'VAR_ACTION' => 'a', // 默认操作获取变量

	/* 表单令牌验证 */
	'TOKEN_ON'   => true, // 开启令牌验证
	'TOKEN_NAME' => '__token__', // 令牌验证的表单隐藏字段名称
	'TOKEN_TYPE' => 'md5', // 令牌验证哈希规则






	/* URL设置 */
	'URL_MODEL' => 1, // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
	// 0 (普通模式);
	//1(PATHINFO模式);
	//2(REWRITE模式);
	//3(兼容模式)当URL_DISPATCH_ON开启后有效;
	//默认为PATHINFO模式，提供最好的用户体验和SEO支持
	'URL_PATHINFO_MODEL' => 2, // PATHINFO 模式,使用数字1、2、3代表以下三种模式:
	// 1 普通模式(参数没有顺序,例如/m/module/a/action/id/1);
	// 2 智能模式(系统默认使用的模式，可自动识别模块和操作/module/action/id/1/ 或者 /module,action,id,1/...);
	// 3 兼容模式(通过一个GET变量将PATHINFO传递给dispather，默认为s index.php?s=/module/action/id/1)
	'URL_PATHINFO_DEPR' => '/', // PATHINFO模式下，各参数之间的分割符号
	'URL_HTML_SUFFIX'=>'html|shtml|xml', // 多个用 | 分割
    'URL_CASE_INSENSITIVE' =>true,//不再区分大小写
	

     //自定义配置信息
     //原CMS系统数据库表名
     'XSSER_MY_TABLENAME' =>array(
              "address",
              "admin",
              "basket",
              "conf",
              "coupon",
              "coupon_give",
              "goumai",
              "jifen",
              "modual",
              "news",
              "news_type",
              "order",
              "product",
              "product_type",
              "replyposts",
              "user",
              "reply",
              "info"
    ),
    //高级模型创建数据库表名和系统表区别词
    'XSSER_MY_CREATE_TABLENAME_PREFIX'=>"new_modual_",
    'XSSER_MY_FENYE_NUMBER'=>20,
    //上传生成缩略图
    'XSSER_MY_UP_THUMB_IMG'=>array(
            'savePath'=>'./Uploads/',//设置附件上传目录
            'thumb' =>true,//设置需要生成缩略图，仅对图像文件有效
            //'thumbPrefix' => 'm'.date("Ymd",time()).'_,s'.date("Ymd",time()).'_',//设置需要生成缩略图的文件前缀
            'thumbPrefix' => 'm_'.'400_400'.'_,s'.'300_300'.'_',//设置需要生成缩略图的文件前缀
            'thumbMaxWidth' => '666,200',//设置缩略图最大宽度
            'thumbMaxHeight' => '333,100',//设置缩略图最大高度
            'thumbPath' => './Uploads/thumb/',//设置缩略图路径   不存在则不会创建目录
            'autoSub'=> true,//子目录保存
            'subType'=>'date',//子目录保存
            'dateFormat'=>'Y_m_d',//子目录保存
            'allowExts'=>  explode ( ',','jpg,gif,png,jpeg,bmp'),//设置上传文件类型
            'maxSize'=>3292200, //3292200//设置上传文件大小
			'imageClassPath'=> '@.ORG.Image',// 设置引用图片类库包路径
			'saveRule'=> 'uniqid',//设置上传文件规则
			'thumbRemoveOrigin'=> false,//删除原图
            'is_shuiyin'=>true,//是否打水印
            'is_shuiyin_yuantu'=>true,//原图
            'is_shuiyin_luesuo'=>true,//略缩
            'shuiyin_img'=>APP_PATH.'Tpl/admin/Public/logo.png',
    ),
    //上传图片
    'XSSER_MY_UP_IMG'=>array(
            'savePath'=>'./Uploads/',//设置附件上传目录
            'allowExts'=>  explode ( ',','jpg,gif,png,jpeg'),//设置上传文件类型
            'maxSize'=>3292200, //3292200//设置上传文件大小
			'imageClassPath'=> '@.ORG.Image',// 设置引用图片类库包路径
			'saveRule'=> 'uniqid',//设置上传文件规则
            'autoSub'=> true,//子目录保存
            'subType'=>'date',//子目录保存
            'dateFormat'=>'Y_m_d',//子目录保存
    ),
    //上传文件
    'XSSER_MY_UP_FILE'=>array(
            'savePath'=>'./Uploads/',//设置附件上传目录
            'allowExts'=>  explode ( ',','jpg,gif,png,jpeg,bmp,rar,7z,zip,avi,rmvb,3gp,flv,mp3,mp4,swf,wav,doc,docx,txt,xls,ppt,pdf'),//设置上传文件类型
            'maxSize'=>3292200, //3292200//设置上传文件大小
			'imageClassPath'=> '@.ORG.Image',// 设置引用图片类库包路径
			'saveRule'=> 'uniqid',//设置上传文件规则
            'autoSub'=> true,//子目录保存
            'subType'=>'date',//子目录保存
            'dateFormat'=>'Y_m_d',//子目录保存
    ),
    //后台系统信息
    'XSSER_SYS_INFO'=>array(
            'title'=>'XSSER_CMS',
            'up_time'=>"2015.8.10",
            'version'=>"0.1",
    ),




);
?>