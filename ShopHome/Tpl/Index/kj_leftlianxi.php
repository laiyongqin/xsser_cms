			<div class="lcontact">
				<h2><img src="../Public/images/title2.png" alt="联系我们"></h2>
				<div class="lcontactcon">
<volist name="nei_lianxi" id="vo">
<php> $param_array=split('[|]',$vo['param']);</php>    
{$param_array[0]|str_replace='\"','"',###}
</volist>
					<div class="lewm"><img src="../Public/images/ewm.png" alt=""></div>
				</div>
			</div>