		<div class="pleft">
			<div class="pnav">
				<h2><img src="../Public/images/title1.png" ></h2>
				<ul class="lmenu">
			<volist name="erjicaidan" id="vo">
				<li <php> if(($vo["id"]) == $type_id){echo "class=\"current\""; }</php> ><a href="<php>echo U('index/anli',array('type_id'=>$vo["id"]));</php>">{$vo.type_name}</a></li>
            </volist>
				</ul>
			</div>
<include file="kj_leftlianxi" />
		</div>