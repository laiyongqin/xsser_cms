<?php
$arr1= array(
	//'配置项'=>'配置值'
	'DEFAULT_THEME'    => 'admin', // 默认模板主题名称
	'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息
	
    /*session*/
    'SESSION_AUTO_START' => true, //是否开启session

	/* 表单令牌验证 */
	'TOKEN_ON'   => true, // 开启令牌验证
	'TOKEN_NAME' => '__token__', // 令牌验证的表单隐藏字段名称
	'TOKEN_TYPE' => 'md5', // 令牌验证哈希规则
    
    /* 分页设置 */
	'PAGE_ROLLPAGE' => 5, // 分页显示页数
	'PAGE_LISTROWS' => 20, // 分页每页显示记录数
	'XSSER_MY_FENYE_NUMBER'=>20,


);

$arr2=include 'Config/config.php';
return array_merge($arr1,$arr2);
?>