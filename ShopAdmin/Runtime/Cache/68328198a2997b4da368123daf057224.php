<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php $config=C("XSSER_SYS_INFO"); echo $config['title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link rel="stylesheet" href="__PUBLIC__/uploadify/uploadify.css">
<script src='__PUBLIC__/jquery.js'></script>
<script src='__PUBLIC__/uploadify/jquery.uploadify.min.js'></script>
<link href="../Public/js/plugins/chosen/chosen/chosen.css" rel="stylesheet">
<link href="../Public/css/twitter/bootstrap.css" rel="stylesheet">
<link href="../Public/css/base.css" rel="stylesheet">
<link href="../Public/css/responsive.css" rel="stylesheet">
<link href="../Public/css/jquery-ui-1.8.23.custom.css" rel="stylesheet">
<script src="../Public/js/plugins/modernizr.custom.32549.js"></script>
<link rel="shortcut icon" href="../Public/css/images/favicon.png">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="../../../html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="../Public/js/jquery.js"></script>-->
<!-- <script src='__PUBLIC__/jquery.js'></script>-->
<script language="javascript" type="text/javascript" src="../Public/js/plugins/jquery.sparkline.min.js"></script>
<script src="../Public/js/bootstrap-transition.js"></script>
<script src="../Public/js/bootstrap-alert.js"></script>
<script src="../Public/js/bootstrap-modal.js"></script>
<script src="../Public/js/bootstrap-dropdown.js"></script>
<script src="../Public/js/bootstrap-scrollspy.js"></script>
<script src="../Public/js/bootstrap-tab.js"></script>
<script src="../Public/js/bootstrap-tooltip.js"></script>
<script src="../Public/js/bootstrap-popover.js"></script>
<script src="../Public/js/bootstrap-button.js"></script>
<script src="../Public/js/bootstrap-collapse.js"></script>
<script src="../Public/js/bootstrap-carousel.js"></script>
<script src="../Public/js/bootstrap-typeahead.js"></script>

<script src="../Public/js/fileinput.jquery.js"></script>
<script src="../Public/js/jquery-ui-1.8.23.custom.min.js"></script>
<script src="../Public/js/jquery.touchdown.js"></script>
<!-- Textarea editor https://github.com/jhollingworth/bootstrap-wysihtml5/ -->
<script src="../Public/js/plugins/justGage.1.0.1/resources/js/raphael.2.1.0.min.js"></script>
<script src="../Public/js/plugins/justGage.1.0.1/resources/js/justgage.1.0.1.min.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/wysihtml5-0.3.0.min.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/bootstrap-wysihtml5.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/jquery.peity.min.js"></script> 
<script language="javascript" type="text/javascript" src="../Public/js/plugins/jquery.uniform.min.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/textarea-autogrow.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/character-limit.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/jquery.maskedinput-1.3.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/chosen/chosen/chosen.jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/bootstrap-datepicker.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/bootstrap-colorpicker.js"></script>

<script language="javascript" type="text/javascript" src="../Public/js/plugins/flot/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/flot/jquery.flot.stack.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/flot/jquery.flot.pie.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/flot/jquery.flot.resize.js"></script>

<script src="../Public/js/scripts.js"></script>    
    
    
</head>
<body>
<!--<div id="loading">
  <img src="../Public/img/ajax-loader.gif">
</div>-->
<div id="responsive_part">
    <div class="logo">
      <a href="index.html"></a> 
    </div>
    <ul class="nav responsive">
      <li>
      <btn class="btn btn-la1rge btn-i1nfo responsive_menu icon_item" data-toggle="collapse" data-target="#sidebar">
       <i class="icon-reorder"></i>
      </btn>
      </li>
    </ul>
</div> <!-- Responsive part -->
<!-- 左侧边栏开始 -->
<div id="sidebar" class="collapse">
   <div class="logo">
    <a href="<?php echo U("Index/index");?>"></a>
  </div>
  <ul id="sidebar_menu" class="navbar nav nav-list sidebar_box">
    <li class="accordion-group <?php echo ($c_letf_number==0?'active':''); ?>">
    <a class="dashboard" href="<?php echo U("Index/index");?>"><img src="../Public/img/menu_icons/dashboard.png">系统信息</a>
    </li>
    <?php if(check_quanxian_module2view($_SESSION ["admin_power"], 1, 'view')){ ?>
    <li class="accordion-group <?php echo ($c_letf_number==1?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed"  href="<?php echo U("DanyeNews/index");?>">
    <img src="../Public/img/menu_icons/tables.png">单页栏目</a>
    <!-- <ul id="collapse1" class="accordion-body collapse <?php echo ($c_letf_number==1?'in':''); ?>">
    </ul>-->
    </li>
    <?php } ?>
    <?php if(check_quanxian_module2view($_SESSION ["admin_power"], 2, 'view')){ ?>
    <li class="accordion-group <?php echo ($c_letf_number==2?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed"  href="<?php echo U("News/index");?>">
    <img src="../Public/img/menu_icons/tables.png">新闻栏目</a>
    <!--<ul id="collapse2" class="accordion-body collapse <?php echo ($c_letf_number==2?'in':''); ?>">
    </ul>-->
    </li>
    <?php } ?>
    <?php if(check_quanxian_module2view($_SESSION ["admin_power"], 3, 'view')){ ?>
    <li class="accordion-group <?php echo ($c_letf_number==3?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed"  href="<?php echo U("Product/index");?>">
    <img src="../Public/img/menu_icons/gallery.png">产品(普通自定义)栏目</a>
    <!--<ul id="collapse3" class="accordion-body collapse <?php echo ($c_letf_number==3?'in':''); ?>">
    </ul>-->
    </li>
    <?php } ?>
    <?php if(check_quanxian_module2view($_SESSION ["admin_power"], 4, 'view')){ ?>
    <li class="accordion-group <?php echo ($c_letf_number==4?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed"   href="<?php echo U("OtherProduct/index");?>">
    <img src="../Public/img/menu_icons/gallery.png">其他自定义栏目</a>
    <!--<ul id="collapse4" class="accordion-body collapse <?php echo ($c_letf_number==4?'in':''); ?>">
    </ul>-->
    </li>
    <?php } ?>
     <?php if(check_quanxian_module2view($_SESSION ["admin_power"], 5, 'view')){ ?>
    <li class="accordion-group <?php echo ($c_letf_number==5?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed"  href="<?php echo U("Productgaoji/index");?>">
    <img src="../Public/img/menu_icons/gallery.png">产品(高级自定义)栏目</a>
    <!--<ul id="collapse5" class="accordion-body collapse <?php echo ($c_letf_number==5?'in':''); ?>">
      <li><a href="../Public/tables_static.html">Static</a></li>
      <li><a href="../Public/tables_dynamic.html">Dynamics</a></li>
    </ul>-->
    </li>
    <?php } ?>
    <?php if(check_quanxian_module2view($_SESSION ["admin_power"], 6, 'view')){ ?>
    <li class="accordion-group <?php echo ($c_letf_number==6?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse6">
    <img src="../Public/img/menu_icons/statistics.png">商城系统</a>
    <ul id="collapse6" class="accordion-body collapse <?php echo ($c_letf_number==6?'in':''); ?>">
      <li><a href="<?php echo U("ShopUser/index");?>">注册用户管理</a></li>
      <!-- 订单暂时隐藏<li><a href="<?php echo U("ShopOrder/index");?>">订单管理</a></li>-->
      <li><a href="<?php echo U("ShopCoupon/index");?>">优惠卷信息管理</a></li>
      <li><a href="<?php echo U("ShopCouponGive/index");?>">优惠卷发放记录</a></li>
      <li><a href="<?php echo U("ShopJifen/index");?>">用户积分变更记录</a></li>
    </ul>
    </li>
    <?php } ?>
    <?php if(check_quanxian_module2view($_SESSION ["admin_power"], 7, 'view')){ ?>
    <li class="accordion-group <?php echo ($c_letf_number==7?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse7">
    <img src="../Public/img/menu_icons/dashboard.png">系统设置与管理</a>
    <ul id="collapse7" class="accordion-body collapse <?php echo ($c_letf_number==7?'in':''); ?>">
      <li><a href="<?php echo U("ConfigModual/index");?>">模型管理</a></li>
      <li><a href="<?php echo U("ConfigProducttype/index");?>">普通自定义栏目类别管理</a></li>
      <li><a href="<?php echo U("ConfigProducttypegaoji/index");?>">高级自定义栏目类别管理</a></li>
      <li><a href="<?php echo U("ConfigNewstype/index");?>">信息类别管理</a></li>
      <li><a href="<?php echo U("ConfigConf/index");?>">全局信息管理</a></li>
      <li><a href="<?php echo U("ConfigAdmin/index");?>">管理人员管理</a></li>
      <li><a href="<?php echo U("Toolsmail/index");?>">邮件发送设置</a></li>
      <li><a href="<?php echo U("Toolslogin/index");?>">后台登录记录</a></li>
    </ul>
    </li>
    <?php } ?>
    <?php if(check_quanxian_module2view($_SESSION ["admin_power"], 8, 'view')){ ?>
   <li class="accordion-group <?php echo ($c_letf_number==8?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse8">
    <img src="../Public/img/menu_icons/widgets.png">评论管理</a>
    <ul id="collapse8" class="accordion-body collapse <?php echo ($c_letf_number==8?'in':''); ?>">
      <li><a href="<?php echo U("PingNews/index");?>">新闻表评论管理</a></li>
      <li><a href="<?php echo U("PingProduct/index");?>">产品表评论管理</a></li>
    </ul>
    </li>
    <?php } ?>
     <?php if(check_quanxian_module2view($_SESSION ["admin_power"], 9, 'view')){ ?>
    <li class="accordion-group <?php echo ($c_letf_number==9?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse9">
    <img src="../Public/img/menu_icons/others.png">工具箱</a>
    <ul id="collapse9" class="accordion-body collapse <?php echo ($c_letf_number==9?'in':''); ?>">
      <li><a href="<?php echo U("Toolsdb/dbbak");?>"><font style="color: red;">点击即刻备份数据库</font></a></li>
      <li><a href="/myzip.php" target="_blank" ><font style="color: red;">网站程序备份</font></a></li>
      <li><a href="/ShopHome/Tpl/tpl-editer.php" target="_blank" ><font style="color: red;">模板在线编辑器</font></a></li>
    </ul>
    </li>
    <?php } ?>
  </ul>
  <!-- End sidebar_box -->
  <!-- End sidebar_box -->
</div>
<!-- 左侧边栏结束 -->
<div id="main">
  <div class="container">
    <!-- top顶部开始 -->
    <!-- UE -->
<script type="text/javascript" charset="UTF-8"	src="__PUBLIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript"	src="__PUBLIC__/ueditor/ueditor.all.js"></script>
<link rel="stylesheet"	href="__PUBLIC__/ueditor/themes/default/ueditor.css" />
<!-- UE -->
<div class="container_top">
  <div class="row-fluid ">
    <!--<div class="top_bar_stats to_hide_tablet">
      <div class="stats"> <span class="title">Sales:</span> +19,77% <span class="bar_1"></span> </div>
      <div class="stats"> <span class="title">Visits:</span> +23,34% <span class="bar_2"></span> </div>
    </div>-->

    <div class="top_right">

      <ul class="nav nav_menu">
        <li class="dropdown"> <a class="dropdown-toggle administrator" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#@"> <span class="icon"><img src="../Public/img/menu_top/profile-avatar.png"></span><span class="title">当前登录账户:<?php echo $_SESSION["admin_name"]; ?>(<?php echo (getadmin_power_name($_SESSION["admin_power"])); ?>)</span></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <!-- <li><a href="#"><i class=" icon-user"></i> My Profile</a></li>-->
            <li><a href="<?php echo U("ConfigAdmin/update_info");?>?id=<?php echo $_SESSION["admin_id"]; ?>"><i class=" icon-cog"></i>设置</a></li>
            <li><a href="<?php echo U("Login/logout");?>"><i class=" icon-unlock"></i>退出 </a></li>
            <!-- <li><a href="#"><i class=" icon-flag"></i>Help</a></li>-->
          </ul>
         </li>
     <div class="top_right">
      <a href="/" target="_blank"><button class="btn btn-info"  data-original-title=".btn .btn-info">网站首页</button></a>
     </div>
     
      </ul>
    </div>
    <!-- End top-right -->
    <div class="span4"> </div>
  </div>
</div>
    <!-- top顶部结束 -->
    <!-- End container_top -->


    <div id="container2">


<div class="row-fluid">
    <div class="box gradient span12">
      <div class="title">
            <div class="row-fluid">
                <h3>
                  <i class=" icon-bar-chart"></i> 新闻信息管理
                </h3>
            </div>
        </div><!-- End .title -->
        
        <div class="content">
            <div class="row-fluid">              
                
            </div>
        </div><!-- End .content -->
        
        <div class="content">
          <ul id="tabExample1" class="nav nav-tabs">
                                    <li class="active"><a href="#home1" data-toggle="tab">修改新闻</a></li>
           </ul>
           <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home1">
                                        <p>
    

    
         <!--  -->
            <div class="row-fluid">
             <div class="span12">
             
        <div class="box gradient">
          <!-- <div class="title">
            <h3>
            <i class="icon-book"></i><span>Input Fields</span>
            </h3>
          </div>-->
          <div class="content">
            <form class="form-horizontal row-fluid" action="<?php echo U("News/update");?>" method="post">
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">类型名称*</label>
                <div class="controls span7">
                  <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo ($mymodualNtype["type_name"]); ?>">
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">标题*</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="news_title" value="<?php echo ($mymodual["news_title"]); ?>" >
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">内容*</label>
                <div class="controls span7">
                  <textarea  id="mydefault-textarea" name="news_content"><?php echo ($mymodual["news_content"]); ?></textarea>
                  <script type="text/javascript">    
                        var editor = new baidu.editor.ui.Editor();    
                        editor.render("mydefault-textarea");//这里认的是上面控件的ID  
                  </script> 
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">是否推荐*</label>
                <div class="controls span6">
                  <label class="inline radio">
                  <input type="radio" name="news_reco" value="1"  <?php if(($mymodual["news_reco"]) == "1"): ?>checked="CHECKED"<?php endif; ?> /> 是</label>
                  <label class="inline radio">
                  <input type="radio" name="news_reco" value="0"  <?php if(($mymodual["news_reco"]) == "0"): ?>checked="CHECKED"<?php endif; ?> /> 否 </label>
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">发布人</label>
                <div class="controls span3">
                  <input type="text" id="normal-field" class="row-fluid" name="news_user" value="<?php echo ($mymodual["news_user"]); ?>" >
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">发布时间*</label>
                <div class="controls span3">
                  <div class="input-append date row-fluid" id="datepicker2" data-date="<?php echo (date('Y-m-d',$mymodual["news_time"])); ?>" data-date-format="yyyy-mm-dd">
                    <input type="text" value="<?php echo (date('Y-m-d',$mymodual["news_time"])); ?>" class="row-fluid"  name="news_time">
                    <span class="add-on"><i class="icon-th"></i></span>
                  </div>
                  <script type='text/javascript'>
                  $('#datepicker2').datepicker();
                  </script>
                </div>
               <div class="control-label span3">
                  必须使用正确格式如：2015-01-05
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">最后修改时间*</label>
                <div class="controls span3">
                  <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo (date('Y-m-d',$mymodual["news_modify_time"])); ?>">
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">查看次数*</label>
                <div class="controls span3">
                  <input type="text" id="disabled-input" class="row-fluid"  value="<?php echo ($mymodual["view_count"]); ?>"  name="view_count">
                </div>
              </div>
              
              <div class="form-row control-group row-fluid">
                <label class="control-label span2">是否审核*</label>
                <div class="controls span6">
                  <label class="inline radio">
                  <input type="radio" name="active" value="1"  <?php if(($mymodual["active"]) == "1"): ?>checked="CHECKED"<?php endif; ?> /> 是</label>
                  <label class="inline radio">
                  <input type="radio" name="active" value="0"  <?php if(($mymodual["active"]) == "0"): ?>checked="CHECKED"<?php endif; ?> /> 否 </label>
                </div>
              </div>
              
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">排序数字*</label>
                <div class="controls span3">
                  <input type="text" id="normal-field" class="row-fluid" name="show_level" value="<?php echo ($mymodual["show_level"]); ?>">
                </div>
               <div class="control-label span3">
                  整数，数值越小排序越靠前，最小为1
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">类型图片</label>
                <div class="controls span9">
                  
                    <input type="text"  class="span5" name="bak1" id="upload_product_type"  value="<?php echo ($mymodual["bak1"]); ?>" >
                    <input id="file_upload_product_type" name="file_upload_product_type" type="file" multiple="true" value="" />
   <script>
        var img = '';
		$('#file_upload_product_type').uploadify({
	        	'swf'      : '__PUBLIC__/uploadify/uploadify.swf',
	        	'uploader' : '<?php echo U("Open/uploadimg");?>',   //上传的方法
	        	'buttonText' : '图片上传',
	        	'onUploadSuccess' : function(file, data, response) {
	        	 var jsonimg=eval('('+data+')');
	        	 if(jsonimg.status==0){
	        		 alert(jsonimg.data);
	        	 }else{
		        	 img = "/Uploads/"+jsonimg.data;
		        	 $('#upload_product_type').val(img);
	        	 }
        	}
    	});
    </script>
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">title(标题)</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="title" value="<?php echo ($mymodual["title"]); ?>" >
                </div>
              </div>
             <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">keyword(关键词)</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="keyword" value="<?php echo ($mymodual["keyword"]); ?>" >
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">description(描述)</label>
                <div class="controls span7">
                  <textarea rows="3" class="row-fluid autogrow" id="elastic-textarea" placeholder="seo优化.." name="description"><?php echo ($mymodual["description"]); ?></textarea>
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">补充信息</label>
                <div class="controls span7">
                  <textarea rows="3" class="row-fluid autogrow" id="elastic-textarea"  name="bak2"><?php echo ($mymodual["bak2"]); ?></textarea>
                </div>
              </div>
              <div class="form-actions row-fluid">
                <div class="span7 offset3">
                  <input type="hidden" name="id" value="<?php echo ($mymodual["id"]); ?>" >
                  <input type="hidden" name="type_id" value="<?php echo ($mymodual["type_id"]); ?>" >
                  <button type="submit" class="btn btn-primary">保存</button>
                  <!-- <button type="button" class="btn btn-secondary">Cancel</button>-->
                </div>
              </div>
            </form>
          </div>
        </div>
             
             
             </div>
             </div>
   <!--  -->
                                    
    
                                        
                                        
                                        
                                        </p>
                                    </div>


                                    <div class="tab-pane fade" id="profile2">

                                    </div>
           </div>
        </div> <!-- End .content -->
    </div><!-- End .span6 .box -->
    
    
    
   

</div><!-- End .row-fluid -->




    </div>




  </div>
  <!-- End #container -->
    <!-- 网站底部版权层开始 -->
<div id="footer">
    <p>
      &copy; XSSER CMS &nbsp;版本:<?php $config=C("XSSER_SYS_INFO"); echo $config['version']; ?> (简约而不简单)
      <!--最后更新:<?php $config=C("XSSER_SYS_INFO"); echo $config['up_time']; ?>-->
    </p>
</div>
   <!-- 网站底部版权层结束 --> <!-- End #footer -->
</div>
</div>
<!-- /container -->
<!-- Le javascript
    ================================================== -->


<script type='text/javascript'>
//$(window).load(function() {
//$('#loading').fadeOut();
//});
</script>

</body>
</html>