<?php if (!defined('THINK_PATH')) exit();?><!doctype html>



<html>



<head>



<meta charset="UTF-8">



<title><?php echo ($getsysinfo_title['value']); ?></title>



<link rel="stylesheet" type="text/css" href="../Public/css/style.css">



<script src="../Public/js/jquery-1.9.1.min.js"></script>



<script src="../Public/js/jquery.SuperSlide.js"></script>



<script src="../Public/js/jqcode.js"></script>



<!--seo-->



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



<div id="banner">



	<div class="bd">



		<ul>



<?php if(is_array($jiaodiantulist)): $i = 0; $__LIST__ = $jiaodiantulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); ?>    



<li style="background-image: url(<?php echo ($param_array[0]); ?>);"><a href="<?php echo ($param_array[1]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>



		</ul>



	</div>



	<div class="hd">



		<ul></ul>



	</div>



</div>



<div class="slogan">



	<img src="../Public/images/slogan.jpg" >



</div>



<div id="main">



	<div class="mtop">



		<h2>什么是新蓝一站式完整的车用尿素解决方案？</h2>



		<div class="mtab">



			<div class="mtabt">



				<ul class="cl">



					<li class="on"><a href="#@">智能生产系统</a></li>



					<li><a href="#@">优质尿素原料</a></li>



					<li><a href="#@">加注系统</a></li>



				</ul>



			</div>



			<div class="mtabcon">



				



				<div class="mtabc">



					<div class="bdys">



						<ul class="bdyslist cl">



							<li><a href="#@" class="l1"></a></li>



							<li><a href="#@" class="l2"></a></li>



							<li><a href="#@" class="l3"></a></li>



							<li><a href="#@" class="l4"></a></li>



						</ul>



					</div>



				</div>

                

                

                <div class="mtabc">



					<div class="mnav">



						<ul class="cl">



							<li class="bluebg">新蓝高纯车用尿素原料</li>



							<li class="greenbg">专利证书</li>



						</ul>



					</div>



					<div class="nsyl cl">



						<div class="nsylleft">



<?php if(is_array($nsyl_cheyong)): $i = 0; $__LIST__ = $nsyl_cheyong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); ?>    



<?php echo (str_replace('\"','"',$param_array[0])); endforeach; endif; else: echo "" ;endif; ?>



						</div>



						<div class="nsylright">



							<div class="zsroll">



								<div class="bd">



									<ul>



<?php if(is_array($nsyl_zhuanyong)): $i = 0; $__LIST__ = $nsyl_zhuanyong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#@" href2="<?php echo U('index/anli_show',array('id'=>$vo['id'])); ?>"><img src="<?php echo ($vo["product_pic_s"]); ?>" width="284" height="374" alt="<?php echo (msubstr($vo["product_title"],0,28,"utf-8",true)); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>



									</ul>



								</div>



								<a href="#@" class="sprev"></a><a href="#@" class="snext"></a>



							</div>



						</div>



					</div>



				</div>

                

                

                



				<div class="mtabc">



					<div class="mnav">



						<ul class="cl">



							<li class="bluebg">网络智能加注机</li>



							<li class="greenbg">自封加注机</li>



						</ul>



					</div>



					<div class="jzxt cl">



						<div class="jzleft">



							<div class="buyroll">



								<div class="bd">



									<ul>



<?php if(is_array($nsyl_jiazhu)): $i = 0; $__LIST__ = $nsyl_jiazhu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); ?> 



<li>



<div class="pic"><a href="<?php echo ($param_array[1]); ?>"><img src="<?php echo ($param_array[0]); ?>" alt=""></a></div>



<h5><a href="<?php echo ($param_array[1]); ?>"><?php echo (msubstr($vo["product_title"],0,28,"utf-8",true)); ?></a></h5>



<div class="op"><a href="<?php echo ($getsysinfo_zixunlink['value']); ?>" class="zxbtn">在线咨询</a> <!--<a href="<?php echo ($getsysinfo_goumailink['value']); ?>" class="buybtn">立即购买</a>--></div>



</li><?php endforeach; endif; else: echo "" ;endif; ?>



										



										



									</ul>



								</div>



								<a href="#@" class="sprev"></a><a href="#@" class="snext"></a>



							</div>



						</div>



						<div class="jzcenter">



							<div class="zcbox">



								<h3>网络智能加注机</h3>



								<p>主要功能：</p>



								<p>智能加注、高精度定量加注、司机和管理者通过APP查询加注记录、打印小票（可选）</p>



								<p>技术指标：</p>



								<p>流量计：1%计量精度</p>



								<p>自封油枪：35升／分</p>



								<p>热敏打印机：58mm纸宽</p>



								<p>适用客户：</p>



								<p>物流园 ，大型物流公司，公交市政等需要对尿素加注进行精细化管理的客户</p>



								<div class="zxop"><a href="<?php echo U('index/anli',array('type_id'=>27)); ?>">更多产品</a></div>



							</div>



						</div>



						<div class="jzright">



							<div class="zcbox">



								<h3>自封加注机</h3>



								<p>主要功能：</p>



								<p>自封加注、定量加注（可升级）</p>



								<p>技术指标：</p>



								<p>流量计：1%计量精度</p>



								<p>自封油枪：35升／分</p>



								<p>热敏打印机：58mm纸宽</p>



								<p>适用客户：</p>



								<p>小型物流公司， 维修厂等最基本简单的使用需要</p>



								<div class="zxop"><a href="<?php echo U('index/anli',array('type_id'=>27)); ?>">更多产品</a></div>



							</div>



						</div>



					</div>



				</div>



			</div>



		</div>



	</div>



	<div class="mbanner"><a href="<?php echo U('index/about',array('type_id'=>7)); ?>"></a></div>



	<div class="block1">



		<h2>选择新蓝选择放心的产品！</h2>



		<div class="btab">



			<div class="btabt">



				<ul class="cl">



					<li class="on"><a href="/index/anli.html">设备&amp;产品</a></li>



					<li><a href="/index/anli/type_id/12.html">研发中心</a></li>



					<li><a href="/index/anli/type_id/6.html">所获荣誉</a></li>



					<li><a href="/index/anli/type_id/13.html">厂容厂貌</a></li>



				</ul>



			</div>



			<div class="btabcon">



				<div class="btabc">



					<div class="indexpro">



<?php if(is_array($nsyl_shebei)): $i = 0; $__LIST__ = $nsyl_shebei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); ?>    



<?php echo (str_replace('\"','"',$param_array[0])); endforeach; endif; else: echo "" ;endif; ?>



					</div>



				</div>



				<div class="btabc">



					<div class="indexprocon">



						<ul class="prolist cl">



<?php if(is_array($yanfalist)): $i = 0; $__LIST__ = $yanfalist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('index/anli_show',array('id'=>$vo['id'])); ?>"><img src="/timthumb.php?src=<?php echo ($vo["product_pic_s"]); ?>&h=238&w=300&zc=2" width="300" height="238" alt="<?php echo (msubstr($vo["product_title"],0,28,"utf-8",true)); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>



						</ul>



					</div>



					<div class="morepro"><a href="<?php echo U('index/anli',array('id'=>12)); ?>">more+</a></div>



				</div>



				<div class="btabc">



					<div class="indexprocon">



						<ul class="prolist cl">



<?php if(is_array($rongyu_p_list)): $i = 0; $__LIST__ = $rongyu_p_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('index/anli_show',array('id'=>$vo['id'])); ?>"><img src="/timthumb.php?src=<?php echo ($vo["product_pic_s"]); ?>&h=238&w=300&zc=2" width="300" height="238" alt="<?php echo (msubstr($vo["product_title"],0,28,"utf-8",true)); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>



						</ul>



					</div>



					<div class="morepro"><a href="<?php echo U('index/anli',array('id'=>6)); ?>">more+</a></div>



				</div>



				<div class="btabc">



					<div class="indexprocon">



						<ul class="prolist cl">



<?php if(is_array($changronglist)): $i = 0; $__LIST__ = $changronglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('index/anli_show',array('id'=>$vo['id'])); ?>"><img src="/timthumb.php?src=<?php echo ($vo["product_pic_s"]); ?>&h=238&w=300&zc=2" width="300" height="238" alt="<?php echo (msubstr($vo["product_title"],0,28,"utf-8",true)); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>



						</ul>



					</div>



					<div class="morepro"><a href="<?php echo U('index/anli',array('id'=>13)); ?>">more+</a></div>



				</div>



			</div>



		</div>



	</div>



	<div class="indexabout">



		<div class="indexaboutcon">



<?php if(is_array($nsyl_about)): $i = 0; $__LIST__ = $nsyl_about;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); ?>    



<div class="aboutpic"><a href="<?php echo U('index/about'); ?>"><img src="<?php echo ($param_array[0]); ?>" width="323" height="272" alt=""></a></div>



<div class="aboutinfo">



<?php echo (str_replace('\"','"',$param_array[1])); ?>



</div><?php endforeach; endif; else: echo "" ;endif; ?>



		</div>



	</div>



	<div class="indexqa">



		<dl class="qalist">



<?php if(is_array($eqlist)): $i = 0; $__LIST__ = $eqlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dt><?php echo (msubstr($vo["news_title"],0,28,"utf-8",true)); ?></dt>



<?php $param_news_content=strip_tags($vo['news_content']); ?>



<dd><?php echo (msubstr($param_news_content,0,200,"utf-8",true)); ?></dd><?php endforeach; endif; else: echo "" ;endif; ?>



		</dl>



	</div>



	<div class="mainbot">



		<div class="mainbotcon">



			<div class="indexnews">



				<h2><span class="more"><a href="<?php echo U('index/news',array('id'=>17)); ?>">more+</a></span>新蓝动态</h2>



				<div class="indexnewscon">



					<ul class="newslist">



<?php if(is_array($tuijian_n_list)): $i = 0; $__LIST__ = $tuijian_n_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); ?> 



<li class="cl">



	<div class="npic"><a href="<?php echo U('index/news_show',array('id'=>$vo['id'])); ?>"><img src="/timthumb.php?src=<?php echo ($vo["product_pic_s"]); ?>&h=97&w=137&zc=2" width="137" height="97" alt=""></a></div>



	<div class="ninfo">



		<h5><a href="<?php echo U('index/news_show',array('id'=>$vo['id'])); ?>"><?php echo (msubstr($vo["product_title"],0,20,"utf-8",true)); ?></a></h5>



		<p><?php echo (msubstr($param_array[0],0,70,"utf-8",true)); ?></p>



	</div>



</li><?php endforeach; endif; else: echo "" ;endif; ?>



					</ul>



				</div>



			</div>



			<div class="botform" id="liuyankuang">



				<h2><span class="more"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;申请新智能蓝设备</h2>



				<dl class="formlist">



					<dt>姓名</dt>



					<dd><input type="text" class="ftxt" id="ccname"></dd>



					<dt>电话</dt>



					<dd><input type="text" class="ftxt" id="cctel"></dd>



					<dt>邮箱</dt>



					<dd><input type="text" class="ftxt" id="ccemial"></dd>



					<dt>区域</dt>



					<dd><input type="text" class="ftxt" id="cccity"></dd>



					<dt>留言</dt>



					<dd><textarea id="ccliuyan" class="tarea"></textarea></dd>



					<dt>&nbsp;</dt>



					<dd class="tc">



					    <input type="button" id="send_ajax2" value="提交" class="submit">



						<input type="button" id="ccreset" value="重置" class="reset">



					</dd>



				</dl>



<script language="javascript">



$(document).ready(function (){



//$.post()方式：



$('#send_ajax2').click(function (){



    $.post(



      '/index/liuyan_post.html',



      {



    	zb_name:$('#ccname').val(),



    	zb_tel:$('#cctel').val(),



    	zb_email:$('#ccemial').val(),



    	zb_city:$('#cccity').val(),



    	zb_liuyan:$('#ccliuyan').val()



      },function (data)



       {



//          var myjson='';



//          eval('myjson=' + data + ';');



//          alert(myjson);



    	  alert(data.info);



          $('#ccname').val("");



          $('#cctel').val("");



          $('#ccemial').val("");



          $('#cccity').val("");



          $('#ccliuyan').val("");



        }



    );



   });



//重置



$('#ccreset').click(function (){



          $('#ccname').val("");



          $('#cctel').val("");



          $('#ccemial').val("");



          $('#cccity').val("");



          $('#ccliuyan').val("");



   });



})



</script>



			</div>



		</div>



	</div>



	<div class="partner">



		<div class="partnercon">



			<ul class="partnerlist cl">



<?php if(is_array($huobanlist)): $i = 0; $__LIST__ = $huobanlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $param_array=split('[|]',$vo['param']); ?>    



<li><a  href="#@" href2="<?php echo ($param_array[1]); ?>"><img src="<?php echo ($param_array[0]); ?>" ></a></li><?php endforeach; endif; else: echo "" ;endif; ?>



				<li><a href="<?php echo ($getsysinfo_zixunlink['value']); ?>">期待您的加入</a></li>



			</ul>



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