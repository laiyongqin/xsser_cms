$(function () {
// 	$('.menu li').hover(function () {
// 		$(this).addClass('on').find('ul:first').show();
// 	},function () {
// 		$(this).removeClass('on').find('ul:first').hide();
// 	})
jQuery(".caseroll").slide({mainCell:".bd ul",autoPage:true,autoPlay:true,effect:"leftLoop",vis:4,scroll:1});
jQuery(".mroll").slide({mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:false,vis:4,scroll:1,prevCell:".sprev",nextCell:".snext",pnLoop:false});
 jQuery("#banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,autoPlay:true});
 jQuery(".indexnews").slide({ titCell:".ntabt li", mainCell:".ntabcon"});
 jQuery(".mtab").slide({ titCell:".mtabt li", mainCell:".mtabcon"});
 jQuery(".stab").slide({ titCell:".stabt li", mainCell:".stabcon"});
// 	$(".pnav h3").click(function() {
// 		$(this).toggleClass('active').next('dl').slideToggle()
// 	});
// 	$(".pnav dt").click(function() {
// 		$(this).toggleClass('on').next('dd').slideToggle()
// 	});
})




















