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
	<article id="news" class="ntab">
		<div class="newstabt">
			<ul class="cl">				
			<volist name="erjicaidan" id="vo">
<a href="<php>echo U('mobile/news',array('type_id'=>$vo["id"]));</php>"><li <php> if(($vo["id"]) == $type_id){echo "class=\"on\""; }</php>>{$vo.type_name}</li></a>
            </volist>
			</ul>
		</div>
		<div class="mtabcon">
			<div class="news">
				<ul class="newslist">
<volist name="thislist" id="vo" > 				
				  <a href="<php>echo U('mobile/news_show',array('id'=>$vo['id']));</php>">
					<li class="cl">
						<div class="npic"><img src=/timthumb.php?src={$vo.product_pic_s}&h=158&w=168&zc=2" alt=""></div>
						<div class="ninfo">
							<h5>{$vo.product_title|msubstr=0,18,"utf-8",true}</h5>
							<p>{$vo.param|msubstr=0,60,"utf-8",true}</p>
						</div>
					</li>
					</a>
</volist>


	


				</ul>
				<div class="pages">
				<center>
{$page}
	</center>
				</div>
			</div>

		</div>
	</article>
</section>
<include file="foot" />