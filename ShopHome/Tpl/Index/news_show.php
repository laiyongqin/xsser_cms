<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>{$mymodual.product_title} - {$mymodualNtype.type_name}</title>
<meta content="{$mymodual.keyword}" name="keywords" />
<meta content="{$mymodual.description}" name="description" />
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
<include file="kj_leftnews" />
		<div class="pright">
			<div class="location">
				<span class="locat">
					您当前的位置：新闻资讯 > {$mymodualNtype.type_name}
				</span>
				<h2>新闻资讯</h2>
			</div>
			<div class="probox">

		<br><br>
		<center><font size="3"><b>{$mymodual.product_title}</b></font></center>
		<div style="float:right;margin-right: 10%"><span>
		<a href="javascript:history.go(-1);">→返回</a>
		</span> </div> 
		<br><br>
        <div> {$mymodual.product_content|str_replace='\"','"',###}</div>
        <br/>
			
			
			</div>
		</div>
	</div>
</div>
<include file="kj_foot" />
</body>
</html>