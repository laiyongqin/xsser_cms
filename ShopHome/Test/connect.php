<?php
$host="qdm123557218.my3w.com";
$db_user="qdm123557218";
$db_pass="60T6JU34";
$db_name="qdm123557218_db";
$timezone="Asia/Shanghai";

$link=mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
mysql_query("SET names UTF8");

header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone); //北京时间
?>
