<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>{$about_type.type_name}</title>
<meta content="{$about_type.keyword}" name="keywords" />
<meta content="{$about_type.description}" name="description" />
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
<include file="kj_leftabout" />
		<div class="pright">
			<div class="location">
				<span class="locat">
					您当前的位置：{$about_type.type_name}
				</span>
				<h2>{$about_type.type_name}</h2>
			</div>
			<div class="probox">

		<br><br>
        <div> {$about.news_content|str_replace='\"','"',###}</div>
        <br/>
			
		<?php if($_GET['type_id']==4){?>	
		<!--  -->
		<div class="indexcase">
		<!--<h2><img src="../Public/images/tit3.png" height="99" width="593" alt=""></h2>-->
		<div class="indexcasecon">
			<div class="bd">
				<ul>

<volist name="lunboanli_list" id="vo" >
<php> $param_array=split('[|]',$vo['param']);</php>   
            <li>
            <a  href="<php>echo U('index/anli_show',array('id'=>$vo['id']));</php>" title="{$vo.product_title|msubstr=0,28,"utf-8",true}" class="group-bak">
            <div class="pic-bak"><img src="/timthumb.php?src={$vo.product_pic_s}&h=197&w=242&zc=2" height="197" width="242" ></div>
            <h5>{$vo.product_title|msubstr=0,28,"utf-8",true}</h5></a>
            </li>
</volist>
			     </ul>
			</div>
			<a href="#@" class="prev"></a><a href="#@" class="next"></a>
		</div>
	</div>
	<!-- 结束 -->
	<?php }?>
			
			</div>
		</div>
	</div>
</div>
<include file="kj_foot" />
</body>
</html>