<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<meta name="HandheldFriendly" content="true" />
<title>{$getsysinfo_title['value']}</title>
<meta content="{$getsysinfo_keywords['value']}" name="keywords" />
<meta content="{$getsysinfo_description['value']}" name="description" />
<link rel="stylesheet" type="text/css" href="../Public/mcss/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../Public/mcss/style.css">
<include file="top" />
<section class="home">
<div id="banner" class="owl-carousel">
<volist name="mjiaodiantulist" id="vo">
<php> $param_array=split('[|]',$vo['param']);</php>
<a class="item" href="{$param_array[1]}"><img src="{$param_array[0]}" alt=""></a>
</volist>
</div>
<!--	<div class="mbox">-->
<!--		<div class="mcon"><a href="#"><img src="mimages/block1.jpg" alt=""></a></div>-->
<!--	</div>-->
	<article class="mbox">
		<h2><a href="<php>echo U('mobile/anli');</php>"><img src="../Public/mimages/tit2.png" alt=""></a></h2>
		<div class="mtabt">
			<ul class="cl">
            <volist name="merjicaidan" id="vo">
	             <li><a href="<php>echo U('mobile/anli',array('type_id'=>$vo["id"]));</php>">{$vo.type_name}</a></li>
	             		<php>$sanjilist=get_sanji($vo["id"]);</php>
	             		<!--<uL>
						<volist name="sanjilist" id="vo2">
							<li <php> if(($vo2["id"]) == $type_id){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/anli',array('type_id'=>$vo2["id"]));</php>">{$vo2.type_name}</a></li>
						 </volist>
						 </ul>-->
            </volist>

			</ul>
		</div>
		<ul class="mlist cl">
<volist name="mp_p_list" id="vo">
<li><a href="<php>echo U('mobile/anli_show',array('id'=>$vo['id']));</php>"><img src="/timthumb.php?src={$vo.product_pic_s}&h=286&w=390&zc=2" alt="{$vo.product_title}"><h6>{$vo.product_title}</h6></a></li>
</volist>
		</ul>
	</article>
	<article class="mbox">
		<div class="mcon"><img src="../Public/mimages/block2.jpg" alt=""></div>
		<!--<div class="mcon"><img src="../Public/mimages/block3.jpg" alt=""></div>-->
	</article>
	<article class="mbox">
		<!--<div class="mcon"><img src="../Public/mimages/block4.jpg" alt=""></div>-->
		<!--<div class="mcon"><img src="../Public/mimages/block5.jpg" alt=""></div>-->
	</article>


	<br><br><br>
	<div class="about">
		<h2>关于我们</h2>
		<article class="aboutcon">
			<div class="aboutpic"><a href="<php>echo U('mobile/info',array('id'=>4));</php>"><img src="../Public/mimages/pic3.jpg" alt=""></a></div>
			<div class="aboutinfo">
<volist name="nsyl_about" id="vo">
<php> $param_array=split('[|]',$vo['param']);</php>
{$param_array[1]|str_replace='\"','"',###}
</volist>
			</div>
			<div class="viewmore"><a href="<php>echo U('mobile/info',array('id'=>4));</php>">查看更多</a></div>
		</article>
	</div>
	<article id="news" class="ntab">
		<div class="ntabt">
			<ul class="cl">
				<li class="on">企业新闻</li>
				<li >行业新闻</li>
				<li >走进新蓝</li>
			</ul>
		</div>
		<div class="mtabcon">
			<div class="news">
				<ul class="newslist">
<volist name="qiye_n_list" id="vo" >
					<a href="<php>echo U('mobile/news_show',array('id'=>$vo['id']));</php>">
					<li class="cl">
						<div class="npic"><img src="/timthumb.php?src={$vo.product_pic_s}&h=126&w=187&zc=2>" alt=""></div>
						<div class="ninfo">
							<h5>{$vo.product_title|msubstr=0,18,"utf-8",true}</h5>
							<p>{$vo.param|msubstr=0,40,"utf-8",true}</p>
						</div>
					</li>
					</a>
</volist>		
				</ul>
				<div class="viewmore"><a href="<php>echo U('mobile/news',array('type_id'=>17));</php>">查看更多</a></div>
			</div>
			
			
				<div class="news">
				<ul class="newslist">
				
<volist name="hengye_n_list" id="vo" >
					<a href="<php>echo U('mobile/news_show',array('id'=>$vo['id']));</php>">
					<li class="cl">
						<div class="npic"><img src="/timthumb.php?src={$vo.product_pic_s}&h=126&w=187&zc=2>" alt=""></div>
						<div class="ninfo">
							<h5>{$vo.product_title|msubstr=0,18,"utf-8",true}</h5>
							<p>{$vo.param|msubstr=0,40,"utf-8",true}</p>
						</div>
					</li>
					</a>
</volist>	
				
				</ul>
				<div class="viewmore"><a href="<php>echo U('mobile/news',array('type_id'=>18));</php>">查看更多</a></div>

			</div>
			
			<div class="news">
				<ul class="newslist">
				
<volist name="zoujin_n_list" id="vo" >
					<a href="<php>echo U('mobile/news_show',array('id'=>$vo['id']));</php>">
					<li class="cl">
						<div class="npic"><img src="/timthumb.php?src={$vo.product_pic_s}&h=126&w=187&zc=2>" alt=""></div>
						<div class="ninfo">
							<h5>{$vo.product_title|msubstr=0,18,"utf-8",true}</h5>
							<p>{$vo.param|msubstr=0,40,"utf-8",true}</p>
						</div>
					</li>
					</a>
</volist>	
				
				</ul>
				<div class="viewmore"><a href="<php>echo U('mobile/news',array('type_id'=>19));</php>">查看更多</a></div>
			</div>
			
		</div>
	</article>
</section>
<include file="foot" />