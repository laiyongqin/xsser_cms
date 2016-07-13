<div id="footer">

	<div class="mbot cl">

		<div class="mbotcon">

{$footinfo.news_content|htmlspecialchars_decode}

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