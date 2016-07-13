		<div class="pleft">
			<div class="pnav">
				<h2><img src="../Public/images/title3.png" alt="新闻资讯"></h2>
				<ul class="lmenu">
	<li <php> if( 4== $type_id){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/about',array('type_id'=>4));</php>">走进新蓝</a></li>
	<li <php> if( 5== $type_id){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/about',array('type_id'=>5));</php>">合作方案</a></li>
	<li <php> if( 6== $type_id&&$this_type_type==0){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/about',array('type_id'=>6));</php>">招商加盟</a></li>
	<li <php> if( 12== $type_id&&$this_type_type==2){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/anli',array('type_id'=>12));</php>">研发中心</a></li>
	<li <php> if( 6== $type_id&&$this_type_type==1){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/anli',array('type_id'=>6));</php>">荣誉资质</a></li>
	<li <php> if( 13== $type_id&&$this_type_type==3){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/anli',array('type_id'=>13));</php>">厂容厂貌</a></li>
	<li <php> if( 30== $type_id&&$this_type_type==6){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/anli',array('type_id'=>30));</php>">经典案例</a></li>
	<li <php> if( 7== $type_id){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/about',array('type_id'=>7));</php>">联系我们</a></li>
				</ul>
			</div>
<include file="kj_leftlianxi" />
		</div>