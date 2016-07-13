$(function () {
// 	$('.menu li').hover(function () {
// 		$(this).addClass('on').find('ul:first').show();
// 	},function () {
// 		$(this).removeClass('on').find('ul:first').hide();
// 	})
jQuery(".zsroll").slide({mainCell:".bd ul",autoPage:true,autoPlay:true,effect:"left",prevCell:".sprev",nextCell:".snext"});
jQuery(".buyroll").slide({mainCell:".bd ul",autoPage:true,autoPlay:true,effect:"left",prevCell:".sprev",nextCell:".snext"});
//jQuery(".indexcasecon").slide({mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5,scroll:1});
jQuery("#banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,autoPlay:true});
//jQuery("#banner").slide({ mainCell:".bd ul",autoPlay:true,effect:"left",
//endFun:function(i,c){
//jQuery("#slideBox1 .tit").css({"bottom":-30}).eq(i).animate({"bottom":0});
//jQuery("#slideBox1 .bg").css({"bottom":-30}).eq(i).animate({"bottom":0});
//}
//});
//jQuery(".indexnews").slide({ titCell:".ntabt li", mainCell:".ntabcon"});
jQuery(".indexcasecon").slide({mainCell:".bd ul",effect:"left",autoPage:true,autoPlay:true,vis:3});
jQuery(".mtab").slide({ titCell:".mtabt li", mainCell:".mtabcon"});
jQuery(".btab").slide({ titCell:".btabt li", mainCell:".btabcon"});
// 	$(".pnav h3").click(function() {
// 		$(this).toggleClass('active').next('dl').slideToggle()
// 	});
// 	$(".pnav dt").click(function() {
// 		$(this).toggleClass('on').next('dd').slideToggle()
// 	});
})