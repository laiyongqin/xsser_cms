<footer id="footer">
{$mfootinfo.news_content|htmlspecialchars_decode}
</footer>
<div class="botnav">
	<ul class="cl">
		<li><a href="{:U("mobile/index")}">首页</a></li>
		<li><a href="tel:4008092987">电话</a></li>
		<li><a href="sms:4008092987">短信</a></li>
		<li><a href="<php>echo U('mobile/info',array('id'=>9));</php>" target2="_blank" >在线咨询</a></li>
	</ul>
	<a href="#header" class="gotop">TOP</a>
</div>
<script type="text/javascript" src="../Public/mjs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../Public/mjs/owl.carousel.min.js"></script>
<script>
 var owl = $("#banner");
 	owl.owlCarousel({
 	navigation : false,
     slideSpeed : 300,
     paginationSpeed : 400,
     singleItem : true,
     autoPlay : true
 });
// var prod = $("#products");
// 	prod.owlCarousel({
// 	navigation : false,
// 	slideSpeed : 300,
// 	paginationSpeed : 400,
// 	items : 3,
// 	autoPlay : true,
// 	pagination:false,
// });
//tab switch
$("#news .news:not(:first)").hide();
$("#news .ntabt li").click(function(){
	var _index = $(this).index();
	$(this).addClass('on').siblings('li').removeClass('on');
	$("#news .news").eq(_index).show().siblings('.news').hide();
	return false;
})
</script>