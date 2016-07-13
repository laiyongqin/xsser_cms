<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<meta name="HandheldFriendly" content="true" />
<title><?php echo ($mymodual["product_title"]); ?> - <?php echo ($mymodualNtype["type_name"]); ?></title>
<meta content="<?php echo ($mymodual["keyword"]); ?>" name="keywords" />
<meta content="<?php echo ($mymodual["description"]); ?>" name="description" />
<link rel="stylesheet" type="text/css" href="../Public/mcss/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../Public/mcss/style.css">
<header id="header">
	<h1><a href="<?php echo U("mobile/index");?>"><img src="../Public/mimages/top.jpg" ></a></h1>
</header>
<div id="nav">
	<ul class="cl">
	    <li><a href="<?php echo U("mobile/index");?>">首页</a></li>
		<li><a href="<?php echo U('mobile/info',array('id'=>8)); ?>">关于我们</a></li>
		<li><a href="<?php echo U('mobile/anli'); ?>">产品中心</a></li>
		<li><a href="<?php echo U('mobile/news'); ?>">新闻中心</a></li>
		<li><a href="<?php echo U('mobile/info',array('id'=>9)); ?>">联系我们</a></li>
	</ul>
</div>
<section class="home">
	<article class="mbox">
	<br><br>
		<h3><span class="cred"><?php echo ($mymodual["product_title"]); ?></span></h3>
				<div style="float:right;margin-top: -20px;"><span><a href="javascript:history.go(-1);">→返回</a></span> </div><br>

<?php $neirong =str_replace('\"','"',$mymodual["product_content"]); ?>
<?php  $array_img=null; $html_dom = new simple_html_dom(); $html_code = $html_dom->load($neirong); $array_img=$html_code->find('img'); foreach($array_img as $element) { $element->setAttribute('width',"90%"); } foreach($array_img as $element){ $element->removeAttribute('height'); } foreach($array_img as $element){ $element->removeAttribute('alt'); } echo $html_code; ?>
		
		<br><br>
		
	</article>
</section>
<footer id="footer">
<?php $about_text=str_replace('\"','"',$mfootinfo['news_content']); ?>
<?php echo ($about_text); ?>
</footer>
<div class="botnav">
	<ul class="cl">
		<li><a href="<?php echo U("mobile/index");?>">首页</a></li>
		<li><a href="tel:0536-8673001">电话</a></li>
		<li><a href="sms:4008092987">短信</a></li>
		<li><a href="<?php echo U('mobile/info',array('id'=>9)); ?>" target2="_blank" >在线咨询</a></li>
	</ul>
	<a href="#header" class="gotop">TOP</a>
</div>
<script type="text/javascript" src="../Public/mjs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../Public/mjs/owl.carousel.min.js"></script>
<script>
 var owl = $("#banner");
 	owl.owlCarousel({
 	navigation : false,
     slideSpeed : 300,
     paginationSpeed : 400,
     singleItem : true,
     autoPlay : true
 });
// var prod = $("#products");
// 	prod.owlCarousel({
// 	navigation : false,
// 	slideSpeed : 300,
// 	paginationSpeed : 400,
// 	items : 3,
// 	autoPlay : true,
// 	pagination:false,
// });
//tab switch
$("#news .news:not(:first)").hide();
$("#news .ntabt li").click(function(){
	var _index = $(this).index();
	$(this).addClass('on').siblings('li').removeClass('on');
	$("#news .news").eq(_index).show().siblings('.news').hide();
	return false;
})
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?7884699891c8995d90d5c7222bb33aaf";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script src='http://xiuke.258.com/swfjs.php?id=818'></script>