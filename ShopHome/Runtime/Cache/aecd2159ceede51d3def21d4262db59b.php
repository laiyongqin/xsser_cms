<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<meta name="HandheldFriendly" content="true" />
<title><?php echo ($getsysinfo_title['value']); ?></title>
<meta content="<?php echo ($getsysinfo_keywords['value']); ?>" name="keywords" />
<meta content="<?php echo ($getsysinfo_description['value']); ?>" name="description" />
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
<div id="banner" class="owl-carousel">
<?php if(is_array($mjiaodiantulist)): $i = 0; $__LIST__ = $mjiaodiantulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); ?>
<a class="item" href="<?php echo ($param_array[1]); ?>"><img src="<?php echo ($param_array[0]); ?>" alt=""></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!--	<div class="mbox">-->
<!--		<div class="mcon"><a href="#"><img src="mimages/block1.jpg" alt=""></a></div>-->
<!--	</div>-->
	<article class="mbox">
		<h2><a href="<?php echo U('mobile/anli'); ?>"><img src="../Public/mimages/tit2.png" alt=""></a></h2>
		<div class="mtabt">
			<ul class="cl">
            <?php if(is_array($merjicaidan)): $i = 0; $__LIST__ = $merjicaidan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('mobile/anli',array('type_id'=>$vo["id"])); ?>"><?php echo ($vo["type_name"]); ?></a></li>
	             		<?php $sanjilist=get_sanji($vo["id"]); ?>
	             		<!--<uL>
						<?php if(is_array($sanjilist)): $i = 0; $__LIST__ = $sanjilist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><li <?php if(($vo2["id"]) == $type_id){echo "class=\"current\""; } ?> ><a href="<?php echo U('index/anli',array('type_id'=>$vo2["id"])); ?>"><?php echo ($vo2["type_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						 </ul>--><?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
		</div>
		<ul class="mlist cl">
<?php if(is_array($mp_p_list)): $i = 0; $__LIST__ = $mp_p_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('mobile/anli_show',array('id'=>$vo['id'])); ?>"><img src="/timthumb.php?src=<?php echo ($vo["product_pic_s"]); ?>&h=286&w=390&zc=2" alt="<?php echo ($vo["product_title"]); ?>"><h6><?php echo ($vo["product_title"]); ?></h6></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</article>
	
	<article class="mbox">
		<!--<div class="mcon"><img src="../Public/mimages/block4.jpg" alt=""></div>-->
		<!--<div class="mcon"><img src="../Public/mimages/block5.jpg" alt=""></div>-->
	</article>


	<br>
	<div class="about">
		<h2>关于我们</h2>
		<article class="aboutcon">
			<div class="aboutpic"><a href="<?php echo U('mobile/info',array('id'=>4)); ?>"><img src="../Public/mimages/pic3.jpg" alt=""></a></div>
			<div class="aboutinfo">
<?php if(is_array($nsyl_about)): $i = 0; $__LIST__ = $nsyl_about;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); $about_text=str_replace('\"','"',$param_array[1]); $about_text=strip_tags($about_text,"<p>"); ?>
<?php echo (msubstr($about_text,0,200,"utf-8",true)); endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="viewmore"><a href="<?php echo U('mobile/info',array('id'=>4)); ?>">查看更多</a></div>
		</article>
	</div>
	<article id="news" class="ntab">
		<div class="ntabt">
			<ul class="cl">
				<li class="on">企业新闻</li>
				<li >行业新闻</li>
			</ul>
		</div>
		<div class="mtabcon">
			<div class="news">
				<ul class="newslist">
<?php if(is_array($qiye_n_list)): $i = 0; $__LIST__ = $qiye_n_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('mobile/news_show',array('id'=>$vo['id'])); ?>">
					<li class="cl">
						<div class="npic"><img src="/timthumb.php?src=<?php echo ($vo["product_pic_s"]); ?>&h=126&w=187&zc=2>" alt=""></div>
						<div class="ninfo">
							<h5><?php echo (msubstr($vo["product_title"],0,18,"utf-8",true)); ?></h5>
							<p><?php echo (msubstr($vo["param"],0,40,"utf-8",true)); ?></p>
						</div>
					</li>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>		
				</ul>
				<div class="viewmore"><a href="<?php echo U('mobile/news',array('type_id'=>17)); ?>">查看更多</a></div>
			</div>
			
			
				<div class="news">
				<ul class="newslist">
				
<?php if(is_array($hengye_n_list)): $i = 0; $__LIST__ = $hengye_n_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('mobile/news_show',array('id'=>$vo['id'])); ?>">
					<li class="cl">
						<div class="npic"><img src="/timthumb.php?src=<?php echo ($vo["product_pic_s"]); ?>&h=126&w=187&zc=2>" alt=""></div>
						<div class="ninfo">
							<h5><?php echo (msubstr($vo["product_title"],0,18,"utf-8",true)); ?></h5>
							<p><?php echo (msubstr($vo["param"],0,40,"utf-8",true)); ?></p>
						</div>
					</li>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>	
				
				</ul>
				<div class="viewmore"><a href="<?php echo U('mobile/news',array('type_id'=>18)); ?>">查看更多</a></div>

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