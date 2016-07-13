<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<meta name="HandheldFriendly" content="true" />
<title>{$about.news_title}</title>
<meta content="{$about_type.keyword}" name="keywords" />
<meta content="{$about_type.description}" name="description" />
<link rel="stylesheet" type="text/css" href="../Public/mcss/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../Public/mcss/style.css">
<include file="top" />
<section class="home">
	<article class="mbox">
	<br><br>
		<h3><span class="cred"></span></h3>
				<div style="float:right;margin-top: -20px;"><span><a href="javascript:history.go(-1);">→返回</a></span> </div><br>
{$about.news_content|htmlspecialchars_decode}
		
		<br><br>
		
	</article>
</section>
<include file="foot" />