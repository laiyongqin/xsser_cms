<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0025)http://www.xtong.net/caz/ -->
<!-- saved from url=(0024)http://www.xuhening.com/ --><HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<title>在线下单</title>
<META content=IE=7.0000 http-equiv=X-UA-Compatible>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>


<?php    
require("../../ShopAdmin/Lib/ORG/PHPMailer.class.php");    
//date_default_timezone_set('UTC');  

function smtp_mail($subject, $body){    
    $mail = new PHPMailer();    
	$mail->SMTPDebug=false ;
    $mail->IsSMTP();                  // send via SMTP    
    $mail->Host = "smtp.qq.com";   // SMTP servers    
    $mail->SMTPAuth = true;           // turn on SMTP authentication    
    $mail->Username = "971811662@qq.com";     // SMTP username  注意：普通邮件认证不需要加 @域名  这里是我的163邮箱
    $mail->Password = "WZQ52687919311111"; // SMTP password    在这里输入邮箱的密码
    $mail->From = "971811662@qq.com";      // 发件人邮箱    
    $mail->FromName = "vip定单".$_GET['UserName'];  // 发件人    
    $mail->CharSet = "UTF-8";   // 这里指定字符集！    指定UTF-8后邮件的标题和发件人等等不会乱码，如果是GB2312标题会乱码
    
	$mail->Encoding = "base64";    
    $mail->AddAddress("969333313@qq.com", "vip");  // 收件人邮箱和姓名    
    $mail->AddReplyTo($_GET['Email'],$_GET['UserName']);    
    //$mail->WordWrap = 50; // set word wrap 换行字数    
    //$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment 附件    
    //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    
    //$mail->IsHTML(true);  // send as HTML    
    // 邮件主题    
    $mail->Subject = $subject;    
    // 邮件内容    
    $mail->Body = $body;                                                                          
    //$mail->AltBody ="text/html";    
    if(!$mail->Send())    
    {    
        echo "error <p>";    
        echo "error: " . $mail->ErrorInfo;    
        exit;    
    }    
    else {    
        echo "<script>alert('恭喜提交VIP定单成功！等待客服与你联系发货');history.back();</script>"; 
    }    
} 
// 参数说明 邮件主题, 邮件内容)
$sendtitle='vip定单'.$_GET['UserName'];

$sendbody.="姓名：".$_GET['UserName']."\n";
$sendbody.="金额：".$_GET['Money']."\n";
$sendbody.="手机：".$_GET['Mobile']."\n";
$sendbody.="邮箱：".$_GET['Email']."\n";
$sendbody.="地址：".$_GET['Address']."\n";
smtp_mail($sendtitle, $sendbody);         
?>