<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<meta name="HandheldFriendly" content="true" />
<title>{$mymodualNtype.type_name}</title>
<meta content="{$mymodualNtype.keyword}" name="keywords" />
<meta content="{$mymodualNtype.description}" name="description" />
<link rel="stylesheet" type="text/css" href="../Public/mcss/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../Public/mcss/style.css">
<include file="top" />
<section class="home">
	<article class="mbox">
		<br>
		<!--<div class="mtabt">
			<ul class="cl">
            <volist name="erjicaidan" id="vo">
	             <li><a href="<php>echo U('mobile/anli',array('type_id'=>$vo["id"]));</php>">{$vo.type_name}</a></li>
	             		<php>$sanjilist=get_sanji($vo["id"]);</php>
	             		<uL>
						<volist name="sanjilist" id="vo2">
							<li <php> if(($vo2["id"]) == $type_id){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/anli',array('type_id'=>$vo2["id"]));</php>">{$vo2.type_name}</a></li>
						 </volist>
						 </ul>
            </volist>

			</ul>
		</div>-->
		<!--<h3><span class="cred">{$mymodualNtype.type_name}</span></h3>-->

		
		<ul class="mlist cl" style="">
<volist name="thislist2" id="vo" > 
		<li><a href="<php>echo U('mobile/anli_show',array('id'=>$vo['id']));</php>"><img src="/timthumb.php?src={$vo.product_pic_s}&h=286&w=390&zc=2" alt="{$vo.product_title}"><h6>{$vo.product_title|msubstr=0,29,"utf-8",true}</h6></a></li>
</volist>


		</ul>
		<div class="pages">	<center>
			{$page}
	</center></div>
	</article>
</section>
<include file="foot" />