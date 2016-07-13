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
</head>
<body>
<include file="kj_top" />
<div class="probanner"></div>
<div id="commain">
	<div class="combox cl">
<?php if($this_type_type==5){?>
<include file="kj_leftanli" />
<?php }else {?>
<include file="kj_leftabout" />
<?php }?>
		<div class="pright">
			<div class="location">
				<span class="locat">
					您当前的位置：
			<php>if($this_type_type==5){ </php>
			<a href="{:U("index/anli")}">产品中心</a>
			<php>}</php>
			<php>if($type_id!=23){ </php>
			> {$mymodualNtype.type_name}
			<php>}</php>
				</span>
				<h2>{$mymodualNtype.type_name}</h2>
			</div>
			<div class="probox">
				<ul class="plist cl">
<volist name="thislist2" id="vo" > 
<li><a href="<php>echo U('index/anli_show',array('id'=>$vo['id']));</php>" class="pic"><img src="/timthumb.php?src={$vo.product_pic_s}&h=300&w=303&zc=2" height="300" width="303" ></a><h5><a href="<php>echo U('index/anli_show',array('id'=>$vo['id']));</php>">{$vo.product_title|msubstr=0,29,"utf-8",true}</a></h5></li>	
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