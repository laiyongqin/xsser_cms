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
	return strtotime($shijian);//.date('H:i:s',time())
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
	if ($uid != 0){
		$where["user_id"]=$uid;
		$where["changyong"]=1;
		$ct = $Modual->where($where)->count();
		//Log::write("sql: ",$Modual->_sql());
		if ($ct > 0) {
			return false;
		}else{
			return true;
		}
	}else{
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
 function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true) {
    if(function_exists("mb_substr")){
        $slice = mb_substr($str, $start, $length, $charset);
        $strlen = mb_strlen($str,$charset);
    }elseif(function_exists('iconv_substr')){
        $slice = iconv_substr($str,$start,$length,$charset);
        $strlen = iconv_strlen($str,$charset);
    }else{
        $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
        $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
        $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
        $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
        $strlen = count($match[0]);
    }
    if($suffix && $strlen>$length)$slice.='...';
    return $slice;
 }
 
 
 
function create_datatable($table_name, $shuxing_type, $table_field){
	$param1 = split ( '[|]', $shuxing_type );
	$param2 = split ( '[|]', $table_field );
	if (count ( $param1 ) == count ( $param2 )) {
		$sql = "CREATE TABLE ";
		$sql .=C('DB_PREFIX').$table_name." ";
		$sql .= " ( ";
		$sql .= " id bigint(20) not null auto_increment primary key, ";
		for ($i = 0; $i < count ($param1); $i++) {
			  $sql .= " $param2[$i] ".selsect_ziduantype($param2[$i]);
			  $sql .= count ($param1)!=$i+1?" , ":"";
		}		
		$sql .= " )ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		return $sql;
	}
	return "";
}

function selsect_ziduantype($shuxing_type) {
	if ($shuxing_type=="text") {
		return " varchar(500) ";
	}elseif ($shuxing_type=="area1") {
		return " varchar(800) ";
	}elseif  ($shuxing_type=="area2") {
		return " text ";
	}elseif  ($shuxing_type=="upload") {
		return "  varchar(500)  ";
	}elseif  ($shuxing_type=="pic") {
		return "  varchar(500) ";
	}elseif($shuxing_type=="radio") {
		return " tinyint(3) ";
	}
	return " varchar(800) ";
}

    /**********
     * 发送邮件 *
     **********/
    function SendMail($address,$title,$message)
    {
        $Model= M("Conf");
		$mail_address =$Model->where(" conf='%s' ","发件邮箱地址")->find();
		$mail_smtp =$Model->where(" conf='%s' ","邮箱SMTP服务器")->find();
		$mail_loginname =$Model->where(" conf='%s' ","邮箱登录帐号")->find();
		$mail_password =$Model->where(" conf='%s' ","邮箱密码")->find();
		$mail_toaddress =$Model->where(" conf='%s' ","邮箱收件箱")->find();
		
        import('@.ORG.PHPMailer');
        $mail=new PHPMailer();

	    $mail->SMTPDebug=false ;
        $mail->IsSMTP();                  // send via SMTP    
        $mail->Host = $mail_smtp["value"];   // SMTP servers    
        $mail->SMTPAuth = true;           // turn on SMTP authentication    
        $mail->Username = $mail_loginname["value"];     // SMTP username  注意：普通邮件认证不需要加 @域名  这里是我的163邮箱
        $mail->Password = $mail_password["value"]; // SMTP password    在这里输入邮箱的密码
        $mail->From = $mail_address["value"];      // 发件人邮箱    
        $mail->FromName = 'XSSER_CMS';  // 发件人    
        $mail->CharSet = "UTF-8";   // 这里指定字符集！    指定UTF-8后邮件的标题和发件人等等不会乱码，如果是GB2312标题会乱码
    
	    $mail->Encoding = "base64";    
        $mail->AddAddress($mail_toaddress["value"], "vip");  // 收件人邮箱和姓名    
    //$mail->AddReplyTo($_GET['Email'],$_GET['UserName']);    
    //$mail->WordWrap = 50; // set word wrap 换行字数    
    //$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment 附件    
    //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    
    //$mail->IsHTML(true);  // send as HTML    
    // 邮件主题    
    $mail->Subject = $title;    
    // 邮件内容    
    $mail->Body = $message;                                                                          
    //$mail->AltBody ="text/html";    
    if(!$mail->Send())    
    {    
//        echo $mail_smtp["value"]."<br>" ;
//        echo $mail_loginname["value"]."<br>" ;
//        echo $mail_password["value"]."<br>" ;
//        echo $mail_address["value"]."<br>" ;
//        echo $mail_toaddress["value"]."<br>" ;
//        echo "error: " . $mail->ErrorInfo;    
//        exit;
         return false;
    }else{    
        return true;
    }  


    }
 

?>