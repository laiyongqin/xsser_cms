<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($mymodual["product_title"]); ?> - <?php echo ($mymodualNtype["type_name"]); ?></title>
<meta content="<?php echo ($mymodual["keyword"]); ?>" name="keywords" />
<meta content="<?php echo ($mymodual["description"]); ?>" name="description" />
<link rel="stylesheet" type="text/css" href="../Public/css/style.css">
<script src="../Public/js/jquery-1.9.1.min.js"></script>
<script src="../Public/js/jquery.SuperSlide.js"></script>
<script src="../Public/js/jqcode.js"></script>
</head>
<body>
<div id="header">
	<div class="topbar">
		<div class="topbarcon">
			<span class="tel">服务热线：400-809-2987</span>
		</div>
	</div>
	<div id="top">
		<div id="logo"><a href="<?php echo U("index/index");?>"><img src="../Public/images/logo.png" alt=""></a></div>
		<div id="nav">
			<ul class="menu">
				<li class="current"><a href="<?php echo U("index/index");?>">网站首页</a></li>
				<li><a href="<?php echo U('index/about',array('type_id'=>4)); ?>">走进新蓝</a></li>
				<li><a href="<?php echo U("index/anli");?>">产品中心</a></li>
				<li><a href="<?php echo U('index/about',array('type_id'=>5)); ?>">合作方案</a></li>
				<li><a href="<?php echo U("index/news");?>">新闻资讯</a></li>
				<li><a href="<?php echo U('index/anli',array('type_id'=>6)); ?>">荣誉资质</a></li>
				<li><a href="<?php echo U('index/about',array('type_id'=>6)); ?>">招商加盟</a></li>
				<li><a href="<?php echo U('index/about',array('type_id'=>7)); ?>">联系我们</a></li>
			</ul>
		</div>
	</div>
</div>							
<div class="probanner"></div>
<div id="commain">
	<div class="combox cl">
<?php if($this_type_type==5){?>
		<div class="pleft">
			<div class="pnav">
				<h2><img src="../Public/images/title1.png" ></h2>
				<ul class="lmenu">
			<?php if(is_array($erjicaidan)): $i = 0; $__LIST__ = $erjicaidan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if(($vo["id"]) == $type_id){echo "class=\"current\""; } ?> ><a href="<?php echo U('index/anli',array('type_id'=>$vo["id"])); ?>"><?php echo ($vo["type_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="lcontact">
				<h2><img src="../Public/images/title2.png" alt="联系我们"></h2>
				<div class="lcontactcon">
<?php if(is_array($nei_lianxi)): $i = 0; $__LIST__ = $nei_lianxi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); ?>    
<?php echo (str_replace('\"','"',$param_array[0])); endforeach; endif; else: echo "" ;endif; ?>
					<div class="lewm"><img src="../Public/images/ewm.png" alt=""></div>
				</div>
			</div>
		</div>
<?php }else {?>
		<div class="pleft">
			<div class="pnav">
				<h2><img src="../Public/images/title3.png" alt="新闻资讯"></h2>
				<ul class="lmenu">
	<li <?php if( 4== $type_id){echo "class=\"current\""; } ?> ><a href="<?php echo U('index/about',array('type_id'=>4)); ?>">走进新蓝</a></li>
	<li <?php if( 5== $type_id){echo "class=\"current\""; } ?> ><a href="<?php echo U('index/about',array('type_id'=>5)); ?>">合作方案</a></li>
	<li <?php if( 6== $type_id&&$this_type_type==0){echo "class=\"current\""; } ?> ><a href="<?php echo U('index/about',array('type_id'=>6)); ?>">招商加盟</a></li>
	<li <?php if( 12== $type_id&&$this_type_type==2){echo "class=\"current\""; } ?> ><a href="<?php echo U('index/anli',array('type_id'=>12)); ?>">研发中心</a></li>
	<li <?php if( 6== $type_id&&$this_type_type==1){echo "class=\"current\""; } ?> ><a href="<?php echo U('index/anli',array('type_id'=>6)); ?>">荣誉资质</a></li>
	<li <?php if( 13== $type_id&&$this_type_type==3){echo "class=\"current\""; } ?> ><a href="<?php echo U('index/anli',array('type_id'=>13)); ?>">厂容厂貌</a></li>
	<li <?php if( 30== $type_id&&$this_type_type==6){echo "class=\"current\""; } ?> ><a href="<?php echo U('index/anli',array('type_id'=>30)); ?>">经典案例</a></li>
	<li <?php if( 7== $type_id){echo "class=\"current\""; } ?> ><a href="<?php echo U('index/about',array('type_id'=>7)); ?>">联系我们</a></li>
				</ul>
			</div>
			<div class="lcontact">
				<h2><img src="../Public/images/title2.png" alt="联系我们"></h2>
				<div class="lcontactcon">
<?php if(is_array($nei_lianxi)): $i = 0; $__LIST__ = $nei_lianxi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); ?>    
<?php echo (str_replace('\"','"',$param_array[0])); endforeach; endif; else: echo "" ;endif; ?>
					<div class="lewm"><img src="../Public/images/ewm.png" alt=""></div>
				</div>
			</div>
		</div>
<?php }?>
		<div class="pright">
			<div class="location">
				<span class="locat">
					您当前的位置： 
			<?php if($this_type_type==5){ ?>
			<a href="<?php echo U("index/anli");?>">产品中心</a>
			<?php } ?>
					> <?php echo ($mymodualNtype["type_name"]); ?>
				</span>
				<h2><?php echo ($mymodualNtype["type_name"]); ?></h2>
			</div>
			<div class="probox">

			
		<br><br>
		<center><font size="3"><b><?php echo ($mymodual["product_title"]); ?></b></font></center>
		<div style="float:right;margin-right: 10%"><span>
		<a href="javascript:history.go(-1);">→返回</a>
		</span> </div> 
		<br><br>
        <div> <?php echo (str_replace('\"','"',$mymodual["product_content"])); ?></div>
        <br/>

			
			<!--<div>
				<?php if($front!=null){ ?><a href="<?php echo U('index/anli_show',array('id'=>$front['id'])); ?>">上一页：<?php echo ($front["product_title"]); ?></a><?php }else{echo '上一页:无数据!';} ?><br>
				<?php if($after!=null){ ?><a href="<?php echo U('index/anli_show',array('id'=>$after['id'])); ?>">下一页：<?php echo ($after["product_title"]); ?></a><?php }else{echo '下一页:无数据!';} ?>
			</div>-->
			
			</div>
		</div>
	</div>
</div>
<div id="footer">

	<div class="mbot cl">

		<div class="mbotcon">

<?php echo (htmlspecialchars_decode($footinfo["news_content"])); ?>

		</div>

		<div class="botewm"><img src="../Public/images/botewm.png" alt=""></div>

	</div>

</div>

<script type="text/javascript">

function isMobile() {

    var sUserAgent = navigator.userAgent.toLowerCase();

    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";

    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";

    var bIsMidp = sUserAgent.match(/midp/i) == "midp";

    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";

    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";

    var bIsAndroid = sUserAgent.match(/android/i) == "android";

    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";

    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";

	if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {

        window.location.href = "/mobile";	

	}

}

//isMobile();

</script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?767631ed33aa17d563a84b827520fa93";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script src='http://xiuke.258.com/swfjs.php?id=818'></script>
<!--浮动广告-->

<div class="lxfx">

    <ul>
        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=906857385&site=qq&menu=yes"  target="_black"><div class="leftlx"><i></i><p>QQ咨询</p></div></a></li>
        <li><a href="javascript:void(0)"><div class="leftlx"><i class="icon-tel"></i><p>400电话</p></div><span>400-809-2987</span></a></li>
        <li><a href="/index#liuyankuang"  target="_black"><div class="leftlx"><i class="icon-ly"></i><p>在线留言</p></div></a></li>
        <li style="overflow:visible;margin-top:-8px;"><a href="javascript:void(0)"><div class="leftlx"><i class="icon-wx"></i><p>微信扫一扫</p></div></a><div class="ewm"><img src="../Public/images/botewm.png"  width="120" height="120"></div></li>

		 <!--  <li style="overflow: visible"><a href="javascript:void(0)"><div class="leftlx"><i class="icon-wb"></i><p>APP下载</p></div></a><div class="ewm1">

		  <p style=" background:#FFFFFF; margin:0px;"> <img src="img/czd.png"  width="120" height="120" /></p>

		 <p style=" background:#FFFFFF; margin:0px;">车主端</p>

		  <p style=" background:#FFFFFF; margin:0px;"> <img src="img/sjd.png"  width="120" height="120" /></p>

		  <p  style=" background:#FFFFFF; margin:0px;"> 商家端</p>

		   </div></li>-->

        

    </ul>

</div>

<script>

    var lxbtn=$(".lxfx li");

    lxbtn.each(function(){

        var index=$(this).index()

        if(index==0 || index==2 ){

            $(this).hover(function(){

                $(this).stop().animate({marginLeft:"-13px",width:"90px"},600)

            },function(){

                $(this).stop().animate({marginLeft:"0px",width:"77px"},600)

            })

        }

        if(index==1){

            $(this).hover(function(){

                $(this).stop().animate({marginLeft:"-155px",width:"232px"},600)

            },function(){

                $(this).stop().animate({marginLeft:"0px",width:"77px"},600)

            })

        }

        if(index==3){

            $(this).hover(function(){

                $(this).stop().animate({marginLeft:"-13px",width:"90px",margintop:"8px"},600,function(){

                    $(".ewm").stop().show()

                })

            },function(){

                $(this).stop().animate({marginLeft:"0px",width:"77px",margintop:"8px"},600,function(){

                    $(".ewm").stop().hide()

                })

            })

        }

		   if(index==4){

            $(this).hover(function(){

                $(this).stop().animate({marginLeft:"-13px",width:"90px"},600,function(){

                    $(".ewm1").stop().show()

                })

            },function(){

                $(this).stop().animate({marginLeft:"0px",width:"77px"},600,function(){

                    $(".ewm1").stop().hide()

                })

            })

        }

    })

</script>																											
</body>
</html>