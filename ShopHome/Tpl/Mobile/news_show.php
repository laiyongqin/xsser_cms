<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<meta name="HandheldFriendly" content="true" />
<title>{$mymodual.product_title} - {$mymodualNtype.type_name}</title>
<meta content="{$mymodual.keyword}" name="keywords" />
<meta content="{$mymodual.description}" name="description" />
<link rel="stylesheet" type="text/css" href="../Public/mcss/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../Public/mcss/style.css">
<include file="top" />
<section class="home">
	<article class="mbox">
	<br><br>
		<h3><span class="cred">{$mymodual.product_title}</span></h3>
				<div style="float:right;margin-top: -20px;"><span><a href="javascript:history.go(-1);">→返回</a></span> </div><br>
{//$mymodual.product_content|str_replace='\"','"',###}
<?php $neirong =str_replace('\"','"',$mymodual["product_content"]); ?>
<?php 
$array_img=null;
//文件创建
//$html_code = file_get_html($this_content);
$html_dom = new simple_html_dom();
$html_code = $html_dom->load($neirong);
//找到所有图片 
$array_img=$html_code->find('img');
foreach($array_img as $element) {
       //$element->setAttribute('width',$element->src);
       $element->setAttribute('width',"90%");
}
//foreach($array_img as $element){
//       $element->removeAttribute('src');
//}
foreach($array_img as $element){
       $element->removeAttribute('height');
}
foreach($array_img as $element){
       $element->removeAttribute('alt');
}
echo  $html_code;
?>
		<br><br>
		
	</article>
</section>
<include file="foot" />