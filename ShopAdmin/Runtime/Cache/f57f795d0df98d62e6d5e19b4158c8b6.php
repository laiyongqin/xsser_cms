<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <title>登录页面-<?php $config=C("XSSER_SYS_INFO"); echo $config['title']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="css/images/favicon.png">
  <!-- Le styles -->
  <link href="../Public/css/twitter/bootstrap.css" rel="stylesheet">
  <link href="../Public/css/base.css" rel="stylesheet">
  <link href="../Public/css/responsive.css" rel="stylesheet">
  <link href="../Public/css/jquery-ui-1.8.23.custom.css" rel="stylesheet">
  <script src="../Public/js/plugins/modernizr.custom.32549.js"></script>
  
</head>

    <body>

      <div id="loading" class="other_pages">
        <!-- Login page -->
        <div id="login">
          <div class="support-note"><!-- let's check browser support with modernizr -->
            <span class="no-csstransforms">CSS transforms are not supported in your browser</span>
            <span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span>
            <span class="no-csstransitions">CSS transitions are not supported in your browser</span>
          </div>

         
     
        
     
        <div class="row-fluid">
          <div class="row-fluid">
            <div id="arrow_register"></div>
            <div class="pull-right spacer-medium already-member members right_offset" style="display:none;">Already a member? <a href="#" class="members_button" id="bb-nav-prev">Log in <i class="icon-undo"></i></a></div>
          </div> 

      <div class="row-fluid bb-bookblock" id="bb-bookblock">
        <div class="bb-item row-fluid login">

         <div class="top-background">
          <div class="fill-background right"><div class="bg row-fluid"></div></div>
          <div id="login-corner-shadow"></div>
        </div>
        <div class="row-fluid container">
          <div class="content">
            <div class="message row-fluid">
              <h4></h4>
              <h3>XSSER CMS登录</h3>
            </div>
          <form class="form-horizontal row-fluid" method="post" action="<?php echo U('Login/checklogin');?>">
            <div class="control-group row-fluid">
              <label class="row-fluid " for="inputEmail">账户</label>
              <div class="controls row-fluid input-append">
                <input type="text" id="inputEmail" name="username" placeholder="账户"  class="row-fluid" value=""> <span class="add-on"><i class="icon-user"></i></span>
              </div>
            </div>
              <div class="control-group row-fluid">
              <label class="row-fluid " for="inputPassword">密码 <div class="pull-right"><a class="muted"><small></small></a></div></label>
              <div class="controls row-fluid input-append">
                <input type="password" id="inputPassword" placeholder="密码" name="password"  class="row-fluid" value=""> <span class="add-on"><i class="icon-lock"></i></span>
              </div>
            </div>
             <div class="control-group row-fluid">
              <label class="row-fluid " for="inputEmail">验证码</label>
              <div class="controls row-fluid input-append">
                <input type="text" id="inputEmail" placeholder="验证码"  name="verify" class="span5" value=""> 
                <span>       
            <p  onclick='this.innerHTML="<img src=<?php echo U('Login/verify');?>?r="+Math.random()+" />"'  >
               <img src="<?php echo U("Login/verify");?>" style="float: right;"  onclick='this.innerHTML="<img src=<?php echo U('Login/verify');?>?r="+Math.random()+" />"' />
            </p>
                </span>
              </div>
             
            </div>
            
            </div>
            
            <div class="control-group row-fluid fluid">
             
              <div class="controls span5 offset1">
                <input type="submit" class="btn btn-primary btn-larg1e row-fluid" value="登录">
              </div>
            </div>
              <div class="control-group row-fluid">
              </div>
              <div class="control-group row-fluid">
              </div>
          </form>
          </div><!-- End .container -->
          </div> <!-- End .row-fluid -->
        </div> <!-- .bb-item  -->


      
        </div> <!-- End #bb-bookblock -->

        </div> <!-- End .row-fluid -->

    </div> <!-- End #login -->
        <!-- <img src="img/ajax-loader.gif"> -->
    </div> <!-- End #loading -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    
    <!-- Flip effect on login screen -->
    <script type="text/javascript" src="../Public/js/jquery.js"></script>
    <script type="text/javascript" src="../Public/js/plugins/jquerypp.custom.js"></script>
    <script type="text/javascript" src="../Public/js/plugins/jquery.bookblock.js"></script>
        <script language="javascript" type="text/javascript" src="../Public/js/plugins/jquery.uniform.min.js"></script>

   <script type="text/javascript">
      $(function() {
        var Page = (function() {

          var config = {
              $bookBlock: $( '#bb-bookblock' ),
              $navNext  : $( '#bb-nav-next' ),
              $navPrev  : $( '#bb-nav-prev' ),
              $navJump  : $( '#bb-nav-jump' ),
              bb        : $( '#bb-bookblock' ).bookblock( {
                speed       : 800,
                shadowSides : 0.8,
                shadowFlip  : 0.7
              } )
            },
            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              var $slides = config.$bookBlock.children(),
                  totalSlides = $slides.length;

            };

            return { init : init };

        })();

        Page.init();

      });
    </script>

    <script type='text/javascript'>
 
    $(window).load(function() {
     $('#loading1').fadeOut();
    });
      $(document).ready(function() {
           $("input:checkbox, input:radio, input:file").uniform();


      $('[rel=tooltip]').tooltip();
      $('body').css('display', 'none');
      $('body').fadeIn(500);

      $("#logo a, #sidebar_menu a:not(.accordion-toggle), a.ajx").click(function() {
        event.preventDefault();
        newLocation = this.href;
        $('body').fadeOut(500, newpage);
        });
        function newpage() {
        window.location = newLocation;
        }
      });
      
    

    </script>
   
</body>
</html>