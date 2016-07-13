<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>{$mymodualNtype.type_name}</title>
<meta content="{$mymodualNtype.keyword}" name="keywords" />
<meta content="{$mymodualNtype.description}" name="description" />
<link rel="stylesheet" type="text/css" href="../Public/css/style.css">
<script src="../Public/js/jquery-1.9.1.min.js"></script>
<script src="../Public/js/jquery.SuperSlide.js"></script>
<script src="../Public/js/jqcode.js"></script>
<!--注释-->
</head>
<body>
<include file="kj_top" />
<div class="probanner"></div>
<div id="commain">
	<div class="combox cl">
<include file="kj_leftnews" />
		<div class="pright">
			<div class="location">
				<span class="locat">
					您当前的位置：新闻资讯 > {$mymodualNtype.type_name}
				</span>
				<h2>新闻资讯</h2>
			</div>
			<div class="probox">
				<ul class="nlist">

<volist name="thislist" id="vo" > 
				<li class="cl">
					<div class="npic"><a href="<php>echo U('index/news_show',array('id'=>$vo['id']));</php>"><img src="{$vo.product_pic_s}" height="216" width="341" alt="{$vo.product_title }"></a></div>
					<div class="ninfo">
						<h5><a href="<php>echo U('index/news_show',array('id'=>$vo['id']));</php>">{$vo.product_title|msubstr=0,37,"utf-8",true} </a></h5>
						<p>{$vo.param|msubstr=0,214,"utf-8",true}</p>
					</div>
				</li>
</volist>


				</ul>
				<div class="pages">
				{$page}
				</div>
			</div>
		</div>
	</div>
</div>
<include file="kj_foot" />
</body>
</html>							