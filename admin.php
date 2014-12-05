<?php
//开启调试模式
define('APP_DEBUG', true);
//定义项目名称和路径
define('APP_NAME', 'ShopAdmin');
define('APP_PATH', './ShopAdmin/');
define("APP_WEB_ROOT",$_SERVER ['DOCUMENT_ROOT']);
// 加载框架入口文件
require( "./Library/ThinkPHP/ThinkPHP.php");