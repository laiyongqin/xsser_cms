<!doctype html>



<html>



<head>



<meta charset="UTF-8">



<title>{$getsysinfo_title['value']}</title>



<link rel="stylesheet" type="text/css" href="../Public/css/style.css">



<script src="../Public/js/jquery-1.9.1.min.js"></script>



<script src="../Public/js/jquery.SuperSlide.js"></script>



<script src="../Public/js/jqcode.js"></script>



<!--seo-->



</head>



<body>



<include file="kj_top" />



<div id="banner">



	<div class="bd">



		<ul>



<volist name="jiaodiantulist" id="vo">



<php> $param_array=split('[|]',$vo['param']);</php>    



<li style="background-image: url({$param_array[0]});"><a href="{$param_array[1]}"></a></li>



</volist>



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



<volist name="nsyl_cheyong" id="vo">



<php> $param_array=split('[|]',$vo['param']);</php>    



{$param_array[0]|str_replace='\"','"',###}



</volist>



						</div>



						<div class="nsylright">



							<div class="zsroll">



								<div class="bd">



									<ul>



<volist name="nsyl_zhuanyong" id="vo" >



<li><a href="#@" href2="<php>echo U('index/anli_show',array('id'=>$vo['id']));</php>"><img src="{$vo.product_pic_s}" width="284" height="374" alt="{$vo.product_title|msubstr=0,28,"utf-8",true}"></a></li>



</volist>



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



<volist name="nsyl_jiazhu" id="vo" >



<php> $param_array=split('[|]',$vo['param']);</php> 



<li>



<div class="pic"><a href="{$param_array[1]}"><img src="{$param_array[0]}" alt=""></a></div>



<h5><a href="{$param_array[1]}">{$vo.product_title|msubstr=0,28,"utf-8",true}</a></h5>



<div class="op"><a href="{$getsysinfo_zixunlink['value']}" class="zxbtn">在线咨询</a> <!--<a href="{$getsysinfo_goumailink['value']}" class="buybtn">立即购买</a>--></div>



</li>



</volist>



										



										



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



								<div class="zxop"><a href="<php>echo U('index/anli',array('type_id'=>27));</php>">更多产品</a></div>



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



								<div class="zxop"><a href="<php>echo U('index/anli',array('type_id'=>27));</php>">更多产品</a></div>



							</div>



						</div>



					</div>



				</div>



			</div>



		</div>



	</div>



	<div class="mbanner"><a href="<php>echo U('index/about',array('type_id'=>7));</php>"></a></div>



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



<volist name="nsyl_shebei" id="vo">



<php> $param_array=split('[|]',$vo['param']);</php>    



{$param_array[0]|str_replace='\"','"',###}



</volist>



					</div>



				</div>



				<div class="btabc">



					<div class="indexprocon">



						<ul class="prolist cl">



<volist name="yanfalist" id="vo" >



<li><a href="<php>echo U('index/anli_show',array('id'=>$vo['id']));</php>"><img src="/timthumb.php?src={$vo.product_pic_s}&h=238&w=300&zc=2" width="300" height="238" alt="{$vo.product_title|msubstr=0,28,"utf-8",true}"></a></li>



</volist>



						</ul>



					</div>



					<div class="morepro"><a href="<php>echo U('index/anli',array('id'=>12));</php>">more+</a></div>



				</div>



				<div class="btabc">



					<div class="indexprocon">



						<ul class="prolist cl">



<volist name="rongyu_p_list" id="vo" >



<li><a href="<php>echo U('index/anli_show',array('id'=>$vo['id']));</php>"><img src="/timthumb.php?src={$vo.product_pic_s}&h=238&w=300&zc=2" width="300" height="238" alt="{$vo.product_title|msubstr=0,28,"utf-8",true}"></a></li>



</volist>



						</ul>



					</div>



					<div class="morepro"><a href="<php>echo U('index/anli',array('id'=>6));</php>">more+</a></div>



				</div>



				<div class="btabc">



					<div class="indexprocon">



						<ul class="prolist cl">



<volist name="changronglist" id="vo" >



<li><a href="<php>echo U('index/anli_show',array('id'=>$vo['id']));</php>"><img src="/timthumb.php?src={$vo.product_pic_s}&h=238&w=300&zc=2" width="300" height="238" alt="{$vo.product_title|msubstr=0,28,"utf-8",true}"></a></li>



</volist>



						</ul>



					</div>



					<div class="morepro"><a href="<php>echo U('index/anli',array('id'=>13));</php>">more+</a></div>



				</div>



			</div>



		</div>



	</div>



	<div class="indexabout">



		<div class="indexaboutcon">



<volist name="nsyl_about" id="vo">



<php> $param_array=split('[|]',$vo['param']);</php>    



<div class="aboutpic"><a href="<php>echo U('index/about');</php>"><img src="{$param_array[0]}" width="323" height="272" alt=""></a></div>



<div class="aboutinfo">



{$param_array[1]|str_replace='\"','"',###}



</div>



</volist>



		</div>



	</div>



	<div class="indexqa">



		<dl class="qalist">



<volist name="eqlist" id="vo" >



<dt>{$vo.news_title|msubstr=0,28,"utf-8",true}</dt>



<php>$param_news_content=strip_tags($vo['news_content']);</php>



<dd>{$param_news_content|msubstr=0,200,"utf-8",true}</dd>



</volist>



		</dl>



	</div>



	<div class="mainbot">



		<div class="mainbotcon">



			<div class="indexnews">



				<h2><span class="more"><a href="<php>echo U('index/news',array('id'=>17));</php>">more+</a></span>新蓝动态</h2>



				<div class="indexnewscon">



					<ul class="newslist">



<volist name="tuijian_n_list" id="vo" >



<php> $param_array=split('[|]',$vo['param']);</php> 



<li class="cl">



	<div class="npic"><a href="<php>echo U('index/news_show',array('id'=>$vo['id']));</php>"><img src="/timthumb.php?src={$vo.product_pic_s}&h=97&w=137&zc=2" width="137" height="97" alt=""></a></div>



	<div class="ninfo">



		<h5><a href="<php>echo U('index/news_show',array('id'=>$vo['id']));</php>">{$vo.product_title|msubstr=0,20,"utf-8",true}</a></h5>



		<p>{$param_array[0]|msubstr=0,70,"utf-8",true}</p>



	</div>



</li>



</volist>



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



<volist name="huobanlist" id="vo">



<php> $param_array=split('[|]',$vo['param']);</php>    



<li><a  href="#@" href2="{$param_array[1]}"><img src="{$param_array[0]}" ></a></li>



</volist>



				<li><a href="{$getsysinfo_zixunlink['value']}">期待您的加入</a></li>



			</ul>



		</div>



	</div>



</div>



<include file="kj_foot" />



</body>



</html>																																			