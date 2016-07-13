<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<meta name="HandheldFriendly" content="true" />
<title><?php echo ($mymodualNtype["type_name"]); ?></title>
<meta content="<?php echo ($mymodualNtype["keyword"]); ?>" name="keywords" />
<meta content="<?php echo ($mymodualNtype["description"]); ?>" name="description" />
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
	<article id="news" class="ntab">
		<div class="newstabt">
			<ul class="cl">				
			<?php if(is_array($erjicaidan)): $i = 0; $__LIST__ = $erjicaidan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('mobile/news',array('type_id'=>$vo["id"])); ?>"><li <?php if(($vo["id"]) == $type_id){echo "class=\"on\""; } ?>><?php echo ($vo["type_name"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="mtabcon">
			<div class="news">
				<ul class="newslist">
<?php if(is_array($thislist)): $i = 0; $__LIST__ = $thislist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('mobile/news_show',array('id'=>$vo['id'])); ?>">
					<li class="cl">
						<div class="npic"><img src=/timthumb.php?src=<?php echo ($vo["product_pic_s"]); ?>&h=158&w=168&zc=2" alt=""></div>
						<div class="ninfo">
							<h5><?php echo (msubstr($vo["product_title"],0,18,"utf-8",true)); ?></h5>
							<p><?php echo (msubstr($vo["param"],0,60,"utf-8",true)); ?></p>
						</div>
					</li>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>


	


				</ul>
				<div class="pages">
				<center>
<?php echo ($page); ?>
	</center>
				</div>
			</div>

		</div>
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