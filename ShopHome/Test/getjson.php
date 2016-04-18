<?php
require_once('connect.php');
$sql="select * from product where type_id in (select id from product_type where type_type=1 )  order by show_level,id desc ";
$result2=mysql_query($sql);
$sayList = null;
$temp_mub=0;
while($row2=mysql_fetch_array($result2))
{
	$p_id=$row2['id'];
	$p_type_id=$row2["type_id"];
	$p_title=$row2["product_title"];
	$p_time=$row2['product_time'];
	$product_pic_s=$row2["product_pic_s"];
	$product_pic_b=$row2["product_pic_b"];
	$product_content=$row2["product_content"];
	$p_param=$row2['param'];//分取数据
	//$p_array=split('[|]',$p_param);	
	$p_array=explode('|',$p_param);	
	$sql="select * from product_type where id=$p_type_id";
	$result3=mysql_query($sql);
	if($row3=mysql_fetch_array($result3))
	{
		$p_type_name_name=$row3["type_name"];
		$html_lanmu3=$row3["html_page"];
	}
	$sayList[$temp_mub]['title']=$p_title;
	$sayList[$temp_mub]['product_pic_s']=$product_pic_s;
	$sayList[$temp_mub]['text']=$product_content;
	charu($sayList[$temp_mub]) ;
	$temp_mub++;
}

function charu($sayList) {
	$time=time();
	$v1=$sayList['title'];
	$v2=$sayList['product_pic_s'];
	$v3=$sayList['text'];
	$sql="INSERT INTO `xsser_product` (`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`bak2`) VALUES (129,'5','$v1','$v2','','$v3',1,'wzq',$time,$time,0,'','',1,500,'','','','') ";
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("xsser_cms", $con);
mysql_query("set names utf8");
mysql_query($sql);

mysql_close($con);
}
?>