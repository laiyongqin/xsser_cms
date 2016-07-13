<?php

function str_chengfa_nbsp($number) {
	$re_str = "";
	$count = $number * 3;
	for($i = 0; $i < $count; $i ++) {
		$re_str .= "&nbsp;";
	}
	return $re_str;
}

function create_uuid($prefix = "") { //可以指定前缀
	$str = md5 ( uniqid ( mt_rand (), true ) );
	$uuid = substr ( $str, 0, 8 ) . '-';
	$uuid .= substr ( $str, 8, 4 ) . '-';
	$uuid .= substr ( $str, 12, 4 ) . '-';
	$uuid .= substr ( $str, 16, 4 ) . '-';
	$uuid .= substr ( $str, 20, 12 );
	return $prefix . $uuid;
}

function show_ip_address($str_ip) {
	import ( '@.ORG.IpLocation' ); // 导入IpLocation类
	$Ip = new IpLocation ( 'qqwry.dat' ); // 实例化类 参数表示IP地址库文件
	$area = $Ip->getlocation ( $str_ip ); // 获取某个IP地址所在的位置
	//return $area;
	return mb_convert_encoding ( $area ['area'], "UTF-8", "GBK" );
}

function getformat_time($shijian) {
	return strtotime ( $shijian ); //.date('H:i:s',time())
}

function getadmin_name($uid) {
	$Modual = M ( "Admin" );
	if ($uid != 0) {
		$mymodual = $Modual->find ( $uid );
		if (mb_strlen ( $mymodual ['admin_user'], 'UTF8' ) == 0) {
			return "用户已删除";
		}
		return $mymodual ['admin_user'];
	} else {
		return "无用户";
	}
}

function getuser_name($uid) {
	$Modual = M ( "User" );
	if ($uid != 0) {
		$mymodual = $Modual->find ( $uid );
		if (mb_strlen ( $mymodual ['username'], 'UTF8' ) == 0) {
			return "用户已删除";
		}
		return $mymodual ['username'];
	} else {
		return "无用户";
	}
}

function getadmin_power_name($power_id) {
	$Modual = M ( "quanxian_power" );
	if ($power_id >= 0) {
		$mymodual = $Modual->find ( $power_id );
		//$mymodual = $Modual->where ( " rank='%s'  ", $power_id )->find ();
		if (mb_strlen ( $mymodual ['name'], 'UTF8' ) == 0) {
			return "原权限组已删除";
		}
		return $mymodual ['name'];
	} else {
		return "原权限组已删除";
	}
}

function getadmin_moduletable_name($module_id) {
	$Modual = M ( "quanxian_moduletable" );
	$mymodual = $Modual->find ( $module_id );
	//$mymodual = $Modual->where ( " rank='%s'  ", $power_id )->find ();
	if (mb_strlen ( $mymodual ['module_name'], 'UTF8' ) == 0) {
		return "原模块已删除";
	}
	return $mymodual ['module_name'];
}

//检验是否具有模块操作权限，模版页面用
function check_quanxian_module2view($power_id, $module_id, $caozuo) {
	if ($power_id != 1 && $_SESSION ["admin_rank"] != 0 && $module_id != 0) { //0是最高权限不需要审核
		$Modual = M ( "quanxian_caozuomodule" );
		$mymodual = $Modual->where ( 'module_id=' . $module_id . ' AND power_id=' . $power_id )->find ();
		$admin_power_name = getadmin_power_name ( $power_id );
		$admin_moduletable_name = getadmin_moduletable_name ( $module_id );
		if ($mymodual == null or $mymodual [$caozuo] == 0) {
			//$this_error_str = '你所在的权限组【' . $admin_power_name . '】' . '没有对模块【' . $admin_moduletable_name . '】的【' . getcaozuo_str_to_hanzi ( $caozuo ) . '】权限！';
			//$this->error ( $this_error_str, U ( "Index/index" ) );
			return false;
		} else {
			return true;
		}
	} else {
		return true;
	}
}

function get_newstype_name($type_id) {
	$Modual = M ( "news_type" );
	$mymodual = $Modual->find ( $type_id );
	if (mb_strlen ( $mymodual ['type_name'], 'UTF8' ) == 0) {
		return "原新闻或者单页板块已删除";
	}
	return $mymodual ['type_name'];
}

function get_producttype_name($type_id) {
	$Modual = M ( "product_type" );
	$mymodual = $Modual->find ( $type_id );
	if (mb_strlen ( $mymodual ['type_name'], 'UTF8' ) == 0) {
		return "原产品板块已删除";
	}
	return $mymodual ['type_name'];
}

function get_nid2news_typeid($nid) {
	$Modual = M ( "News" );
	$condition ["id"] = $nid;
	$mymodual = $Modual->where ( $condition )->find ();
	return $mymodual ['type_id'];
}

function get_pid2product_typeid($pid) {
	$Modual = M ( "Product" );
	$condition ["id"] = $pid;
	$mymodual = $Modual->where ( $condition )->find ();
	return $mymodual ['type_id'];
}

function getcaozuo_str_to_hanzi($caozuo) {
	$return_str = "";
	switch ($caozuo) {
		case 'add' :
			$return_str = "增加";
			break;
		case 'del' :
			$return_str = "删除";
			break;
		case 'up' :
			$return_str = "修改";
			break;
		case 'select' :
			$return_str = "查询";
			break;
		case 'view' :
			$return_str = "管理";
			break;
		default :
			$return_str = "错误的操作字符串:" . $caozuo;
			break;
	}
	return $return_str;
}

function getadmin_power_rank($power_id) {
	$Modual = M ( "quanxian_power" );
	if ($power_id >= 0) {
		$mymodual = $Modual->find ( $power_id );
		//$mymodual = $Modual->where ( " rank='%s'  ", $power_id )->find ();
		return $mymodual ['rank'];
	} else {
		return "没有分配权限等级";
	}
}

function getadmin_quanxian_caozuomodule($power_id, $module_id) {
	$Modual = M ( "quanxian_caozuomodule" );
	//$mymodual = $Modual->find ( $power_id );
	$mymodual = $Modual->where ( 'module_id=' . $module_id . ' AND power_id=' . $power_id )->find ();
	if ($mymodual == null) {
		return 0;
	}
	return $mymodual ['view'];
}

function getadmin_quanxian_caozuon($power_id, $nid, $caozuo) {
	$Modual = M ( "quanxian_caozuon" );
	$mymodual = $Modual->where ( 'nid=' . $nid . ' AND power_id=' . $power_id )->find ();
	if ($mymodual == null) {
		return 0;
	}
	return $mymodual [$caozuo];
}

function getadmin_quanxian_caozuop($power_id, $pid, $caozuo) {
	$Modual = M ( "quanxian_caozuop" );
	$mymodual = $Modual->where ( 'pid=' . $pid . ' AND power_id=' . $power_id )->find ();
	if ($mymodual == null) {
		return 0;
	}
	return $mymodual [$caozuo];
}

function getcoupon_name($uid) {
	$Modual = M ( "Coupon" );
	if ($uid != 0) {
		$mymodual = $Modual->find ( $uid );
		if (mb_strlen ( $mymodual ['name'], 'UTF8' ) == 0) {
			return "优惠券已删除";
		}
		return $mymodual ['name'];
	} else {
		return "无优惠券";
	}
}

function getuser_changyong($uid) {
	$Modual = M ( "Address" );
	if ($uid != 0) {
		$where ["user_id"] = $uid;
		$where ["changyong"] = 1;
		$ct = $Modual->where ( $where )->count ();
		//Log::write("sql: ",$Modual->_sql());
		if ($ct > 0) {
			return false;
		} else {
			return true;
		}
	} else {
		return false;
	}
}

function get_new_name($uid) {
	$Modual = M ( "News" );
	if ($uid != 0) {
		$mymodual = $Modual->find ( $uid );
		if (mb_strlen ( $mymodual ['news_title'], 'UTF8' ) == 0) {
			return "资源已删除";
		}
		return $mymodual ['news_title'];
	} else {
		return "资源已删除";
	}

}

function get_product_name($uid) {
	$Modual = M ( "product" );
	if ($uid != 0) {
		$mymodual = $Modual->find ( $uid );
		if (mb_strlen ( $mymodual ['product_title'], 'UTF8' ) == 0) {
			return "资源已删除";
		}
		return $mymodual ['product_title'];
	} else {
		return "资源已删除";
	}

}

/**
 * 字符串截取，支持中文和其他编码
 * static 
 * access public
 * @param string $str 需要转换的字符串
 * @param string $start 开始位置
 * @param string $length 截取长度
 * @param string $charset 编码格式
 * @param string $suffix 截断显示字符
 * return string
 */
function msubstr($str, $start = 0, $length, $charset = "utf-8", $suffix = true) {
	if (function_exists ( "mb_substr" )) {
		$slice = mb_substr ( $str, $start, $length, $charset );
		$strlen = mb_strlen ( $str, $charset );
	} elseif (function_exists ( 'iconv_substr' )) {
		$slice = iconv_substr ( $str, $start, $length, $charset );
		$strlen = iconv_strlen ( $str, $charset );
	} else {
		$re ['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
		$re ['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
		$re ['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
		$re ['big5'] = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
		preg_match_all ( $re [$charset], $str, $match );
		$slice = join ( "", array_slice ( $match [0], $start, $length ) );
		$strlen = count ( $match [0] );
	}
	if ($suffix && $strlen > $length)
		$slice .= '...';
	return $slice;
}

function create_datatable($table_name, $shuxing_type, $table_field) {
	$param1 = split ( '[|]', $shuxing_type );
	$param2 = split ( '[|]', $table_field );
	if (count ( $param1 ) == count ( $param2 )) {
		$sql = "CREATE TABLE ";
		$sql .= C ( 'DB_PREFIX' ) . $table_name . " ";
		$sql .= " ( ";
		$sql .= " id bigint(20) not null auto_increment primary key, ";
		for($i = 0; $i < count ( $param1 ); $i ++) {
			$sql .= " $param2[$i] " . selsect_ziduantype ( $param2 [$i] );
			$sql .= count ( $param1 ) != $i + 1 ? " , " : "";
		}
		$sql .= " )ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		return $sql;
	}
	return "";
}

function selsect_ziduantype($shuxing_type) {
	if ($shuxing_type == "text") {
		return " varchar(800) ";
	} elseif ($shuxing_type == "area1") {
		return " varchar(800) ";
	} elseif ($shuxing_type == "area2") {
		return " text ";
	} elseif ($shuxing_type == "upload") {
		return "  varchar(800)  ";
	} elseif ($shuxing_type == "pic") {
		return "  varchar(800) ";
	} elseif ($shuxing_type == "radio") {
		return " tinyint(3) ";
	} elseif ($shuxing_type == "radio2") {
		return "  varchar(800) ";
	} elseif ($shuxing_type == "listtype") {
		return "  varchar(800) ";
	} elseif ($shuxing_type == "checkbox") {
		return "  varchar(800) ";
	} elseif ($shuxing_type == "sqltype") {
		return "  varchar(500) ";
	}
	return " varchar(800) ";
}

/**********
 * 发送邮件 *
 **********/
function SendMail($address, $title, $message) {
	$Model = M ( "Conf" );
	$mail_address = $Model->where ( " conf='%s' ", "发件邮箱地址" )->find ();
	$mail_smtp = $Model->where ( " conf='%s' ", "邮箱SMTP服务器" )->find ();
	$mail_loginname = $Model->where ( " conf='%s' ", "邮箱登录帐号" )->find ();
	$mail_password = $Model->where ( " conf='%s' ", "邮箱密码" )->find ();
	$mail_toaddress = $Model->where ( " conf='%s' ", "邮箱收件箱" )->find ();
	
	import ( '@.ORG.Email' );
	if ($address == "") {
		$address = $mail_toaddress ["value"];
	}
	$smtpserver = $mail_smtp ["value"]; //SMTP服务器
	$smtpserverport = 25; //SMTP服务器端口
	$smtpusermail = $mail_address ["value"]; //SMTP服务器的用户邮箱
	$smtpemailto = $address; //发送给谁
	$smtpuser = $mail_loginname ["value"]; //SMTP服务器的用户帐号
	$smtppass = $mail_password ["value"]; //SMTP服务器的用户密码
	$mailtitle = $title; //邮件主题
	$mailcontent = $message; //邮件内容
	$mailtype = "HTML"; //邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new smtp ( $smtpserver, $smtpserverport, true, $smtpuser, $smtppass ); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false; //是否显示发送的调试信息
	$state = $smtp->sendmail ( $smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype );
	
	if (! $state) {
		return false;
	} else {
		return true;
	}

}

//返回ture删除这个数据
//function selsect_gaojimoxing_edit($table_name) {
//	if ($table_name == "checkbox") {
//		return false;
//	}
//	if ($table_name == "sqltype") {
//		return false;
//	}
//	if ($table_name == "radio2") {
//		return false;
//	}
//	if ($table_name == "listtype") {
//		return false;
//	}
//	return true;
//}


function get_gaojimoxing_text_info($modual_id,$table_name) {
	$Mfc = M ( "ModualFieldContent" );
	$datamfc ['modual_id'] =$modual_id;
	$datamfc ['select_field'] = $table_name;
	$Mfcdata = $Mfc->where ( $datamfc )->find (); //查所有数据
	$arraydata= explode(",",$Mfcdata['content']);
	return $arraydata;
}

function get_gaojimoxing_sql_info($modual_id,$table_name) {
	$Mfc = M ( "ModualFieldContent" );
	$datamfc ['modual_id'] =$modual_id;
	$datamfc ['select_field'] = $table_name;
	$Mfcdata = $Mfc->where ( $datamfc )->find (); //查所有数据
	$Modual = M ( "Product" );
	$condition ["type_id"] = $Mfcdata['content'];
	$mymodual = $Modual->where ( $condition )->field('id,product_title')->select();
	return $mymodual;
}

function get_quxiegang_text($contents_file_up){
    if (get_magic_quotes_gpc()) // 如果get_magic_quotes_gpc()是打开的
    {
        return stripslashes($contents_file_up); // 将字符串进行处理
    }else {
        return $contents_file_up; // 将字符串直接返回
    }
}

function alert($str,$url)
{
    echo "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
    echo "<script language='javascript'>alert('" . $str . "');";
    if(strlen($url)>0)
    {
        echo "window.location='".$url."';</script>";
    }
    else
    {
        echo "history.go(-1);</script>";
    }
}

?>