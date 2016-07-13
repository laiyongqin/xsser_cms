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
					> {$mymodualNtype.type_name}
				</span>
				<h2>{$mymodualNtype.type_name}</h2>
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

			
			<!--<div>
				<php>if($front!=null){</php><a href="<php>echo U('index/anli_show',array('id'=>$front['id']));</php>">上一页：{$front.product_title}</a><php>}else{echo '上一页:无数据!';}</php><br>
				<php>if($after!=null){</php><a href="<php>echo U('index/anli_show',array('id'=>$after['id']));</php>">下一页：{$after.product_title}</a><php>}else{echo '下一页:无数据!';}</php>
			</div>-->
			
			</div>
		</div>
	</div>
</div>
<include file="kj_foot" />
</body>
</html>