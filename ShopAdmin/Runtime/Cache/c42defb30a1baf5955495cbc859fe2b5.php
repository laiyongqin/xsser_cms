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
<div id="loading">
  <img src="../Public/img/ajax-loader.gif">
</div>
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
    <a href="../Public/index.html"></a>
  </div>
  <ul id="sidebar_menu" class="navbar nav nav-list sidebar_box">
    <li class="accordion-group <?php echo ($c_letf_number==0?'active':''); ?>">
    <a class="dashboard" href="<?php echo U("Index/index");?>"><img src="../Public/img/menu_icons/dashboard.png">系统信息</a>
    </li>
    <li class="accordion-group <?php echo ($c_letf_number==1?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed"  href="<?php echo U("DanyeNews/index");?>">
    <img src="../Public/img/menu_icons/tables.png">单页栏目</a>
    <!-- <ul id="collapse1" class="accordion-body collapse <?php echo ($c_letf_number==1?'in':''); ?>">
    </ul>-->
    </li>
    <li class="accordion-group <?php echo ($c_letf_number==2?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed"  href="<?php echo U("News/index");?>">
    <img src="../Public/img/menu_icons/tables.png">新闻栏目</a>
    <!--<ul id="collapse2" class="accordion-body collapse <?php echo ($c_letf_number==2?'in':''); ?>">
    </ul>-->
    </li>
    <li class="accordion-group <?php echo ($c_letf_number==3?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed"  href="<?php echo U("Product/index");?>">
    <img src="../Public/img/menu_icons/gallery.png">产品(普通自定义)栏目</a>
    <!--<ul id="collapse3" class="accordion-body collapse <?php echo ($c_letf_number==3?'in':''); ?>">
    </ul>-->
    </li>
    <li class="accordion-group <?php echo ($c_letf_number==4?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed"   href="<?php echo U("OtherProduct/index");?>">
    <img src="../Public/img/menu_icons/gallery.png">其他自定义栏目</a>
    <!--<ul id="collapse4" class="accordion-body collapse <?php echo ($c_letf_number==4?'in':''); ?>">
    </ul>-->
    </li>
    <li class="accordion-group <?php echo ($c_letf_number==5?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed"  href="<?php echo U("Productgaoji/index");?>">
    <img src="../Public/img/menu_icons/gallery.png">产品(高级自定义)栏目</a>
    <!--<ul id="collapse5" class="accordion-body collapse <?php echo ($c_letf_number==5?'in':''); ?>">
      <li><a href="../Public/tables_static.html">Static</a></li>
      <li><a href="../Public/tables_dynamic.html">Dynamics</a></li>
    </ul>-->
    </li>
    <li class="accordion-group <?php echo ($c_letf_number==6?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse6">
    <img src="../Public/img/menu_icons/statistics.png">商城系统</a>
    <ul id="collapse6" class="accordion-body collapse <?php echo ($c_letf_number==6?'in':''); ?>">
      <li><a href="<?php echo U("ShopUser/index");?>">注册用户管理</a></li>
      <li><a href="<?php echo U("ShopOrder/index");?>">订单管理</a></li>
      <li><a href="<?php echo U("ShopCoupon/index");?>">优惠卷信息管理</a></li>
      <li><a href="<?php echo U("ShopCouponGive/index");?>">优惠卷发放记录</a></li>
      <li><a href="<?php echo U("ShopJifen/index");?>">用户积分变更记录</a></li>
    </ul>
    </li>
    <li class="accordion-group <?php echo ($c_letf_number==7?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse7">
    <img src="../Public/img/menu_icons/dashboard.png">系统设置</a>
    <ul id="collapse7" class="accordion-body collapse <?php echo ($c_letf_number==7?'in':''); ?>">
      <li><a href="<?php echo U("ConfigModual/index");?>">模型管理</a></li>
      <li><a href="<?php echo U("ConfigProducttype/index");?>">普通自定义栏目类别管理</a></li>
      <li><a href="<?php echo U("ConfigProducttypegaoji/index");?>">高级自定义栏目类别管理</a></li>
      <li><a href="<?php echo U("ConfigNewstype/index");?>">信息类别管理</a></li>
      <li><a href="<?php echo U("ConfigConf/index");?>">全局信息管理</a></li>
      <li><a href="<?php echo U("ConfigAdmin/index");?>">管理人员管理</a></li>
    </ul>
    </li>
   <li class="accordion-group <?php echo ($c_letf_number==8?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse8">
    <img src="../Public/img/menu_icons/widgets.png">评论管理</a>
    <ul id="collapse8" class="accordion-body collapse <?php echo ($c_letf_number==8?'in':''); ?>">
      <li><a href="<?php echo U("PingNews/index");?>">新闻表评论管理</a></li>
      <li><a href="<?php echo U("PingProduct/index");?>">产品表评论管理</a></li>
    </ul>
    </li>
    <li class="accordion-group <?php echo ($c_letf_number==9?'active':''); ?>">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse9">
    <img src="../Public/img/menu_icons/others.png">工具箱</a>
    <ul id="collapse9" class="accordion-body collapse <?php echo ($c_letf_number==9?'in':''); ?>">
      <li><a href="<?php echo U("Toolsdb/dbbak");?>"><font style="color: red;">点击即刻备份数据库</font></a></li>
      <li><a href="/myzip.php" target="_blank" ><font style="color: red;">网站程序备份</font></a></li>
      <li><a href="<?php echo U("Toolsmail/index");?>">邮件发送设置</a></li>
      <li><a href="<?php echo U("Toolslogin/index");?>">后台登录记录</a></li>
    </ul>
    </li>
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
    <!-- <div class="top_bar_stats to_hide_tablet">
      <div class="stats"> <span class="title">Sales:</span> +19,77% <span class="bar_1"></span> </div>
      <div class="stats"> <span class="title">Visits:</span> +23,34% <span class="bar_2"></span> </div>
      <div class="stats"> <span class="title">New Users:</span> +2,84% <span class="bar_3"></span> </div>
    </div>-->
    <div class="top_right">
     <!--<ul class="nav search">
        <li>
          <form class="form-search">
            <div class="input-append">
              <input type="text" class=" search-query" placeholder="Search..">
            </div>
          </form>
        </li>
      </ul>-->
      <ul class="nav nav_menu">
        <li class="dropdown"> <a class="dropdown-toggle administrator" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html"> <span class="icon"><img src="../Public/img/menu_top/profile-avatar.png"></span><span class="title">当前登录账户:<?php echo $_SESSION["admin_name"]; ?></span></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <!-- <li><a href="#"><i class=" icon-user"></i> My Profile</a></li>-->
            <li><a href="<?php echo U("ConfigAdmin/update_info");?>?id=<?php echo $_SESSION["admin_id"]; ?>"><i class=" icon-cog"></i>设置</a></li>
            <li><a href="<?php echo U("Login/logout");?>"><i class=" icon-unlock"></i>退出</a></li>
            <!-- <li><a href="#"><i class=" icon-flag"></i>Help</a></li>-->
          </ul>
        </li>
       <!--<li class="dropdown"> <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html"> <span class="icon"><img src="../Public/img/menu_top/profile-messages.png"></span><span class="notifications">3</span> </a>
          <ul class="dropdown-menu messages" aria-labelledby="dLabel">
            <div class="container">
              <div class="heading"> <span class="title"><i class="icon-comments"></i>Messages</span><span class="link"><a href="#">Send a new message</a></span> </div>
              <ul>
                <li> <a href="#">
                  <div class="avatar"> <img src="../Public/img/message_avatar1.png"/> </div>
                  <div class="container"> <span class="name">John Smith</span> <span class="message"><i class="icon-share-alt"></i>The first thing I remember.. <br/>
                    </span> <span class="date">Aug 8</span> </div>
                  </a> </li>
                <li> <a href="#">
                  <div class="avatar"> <img src="../Public/img/message_avatar2.png"/> </div>
                  <div class="container"> <span class="name">Celeste Holm</span> <span class="message"><i class="icon-share-alt"></i>What have you learned from.. <br/>
                    </span> <span class="date">Aug 6</span> </div>
                  </a> </li>
                <li> <a href="#">
                  <div class="avatar"> <img src="../Public/img/message_avatar3.png"/> </div>
                  <div class="container"> <span class="name">Mark Jobs</span> <span class="message"><i class="icon-share-alt"></i>Start it and stick with it.. <br/>
                    </span> <span class="date">Jul 27</span> </div>
                  </a> </li>
              </ul>
              <div class="footer"> <a class="see_all">See All Messages <i class="icon-chevron-right"></i></a> </div>
            </div>
          </ul>
        </li>-->
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
                  <i class=" icon-bar-chart"></i> 商城-注册用户管理
                </h3>
            </div>
        </div><!-- End .title -->
        
        <div class="content">
            <div class="row-fluid">
               <!-- <a   onclick="#"  class="btn btn-info">新增</a>-->

                
            </div>
        </div><!-- End .content -->
        
        <div class="content">
          <ul id="tabExample1" class="nav nav-tabs">
                                    <li class="active"><a href="#home1" data-toggle="tab">信息</a></li>
                                    <li><a href="#profile2" data-toggle="tab">增加用户</a></li>
           </ul>
           <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home1">
                                        <p>
    
    
   <div id="container2">
      <div class="row-fluid ">
        <div class="span12 box gradient ">
          <div class="title">
           <!-- <h2>
            <i class=" icon-bar-chart"></i><span>Complex table with checkboxes and controls</span>
            </h2>-->
          </div>
          <!-- End .title -->
          <div class="content top">
            <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
            <thead>
            <tr>
              <th class="no_sort">
              账户名字
              </th>
              <th class="no_sort">
              状态
              </th>
              <th class="no_sort to_hide_phone">
              显示名(昵称)
              </th>
              <th class="no_sort to_hide_phone">
              性别
              </th>
              <th class="no_sort to_hide_phone">
              邮箱
              </th>
             <th class="no_sort to_hide_phone">
              积分
              </th>
             <th class="no_sort to_hide_phone">
             注册时间
              </th>
              <th class="no_sort to_hide_phone">
             注册IP
              </th>
              <th class="ms no_sort ">
              操作
              </th>

            </tr>
            </thead>
            <tbody>
            <?php if(is_array($thislist)): $i = 0; $__LIST__ = $thislist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
              <td>
                <?php echo ($vo["username"]); ?>
              </td>
              <td class="to_hide_phone">
                <?php if(($vo["state"]) == "1"): ?>正常<?php endif; if(($vo["state"]) == "0"): ?><span style="color: red;">禁用</span><?php endif; ?>
              </td>
              <td class="to_hide_phone">
               <?php echo ($vo["nname"]); ?>
              </td>
              <td class="to_hide_phone">
                <?php if(($vo["sex"]) == "1"): ?>男<?php endif; if(($vo["sex"]) == "0"): ?>女<?php endif; ?>
              </td>
              <td class="to_hide_phone">
               <?php echo ($vo["email"]); ?>
              </td>
              <td class="to_hide_phone">
               <?php echo ($vo["jifen"]); ?>
              </td>
              <td class="to_hide_phone">
                <div class="row-fluid">
                <?php echo (date("Y-m-d H:i:s",$vo["regtime"])); ?>
                </div>
              </td>
              <td class="to_hide_phone">
                <div class="row-fluid">
               <?php echo ($vo["regip"]); ?> <?php echo (show_ip_address($vo["regip"])); ?>
                </div>
              </td>
              <td class="ms">
                <div class="btn-group1">
                  <a class="btn btn-small" rel="tooltip" data-placement="left" data-original-title="收货地址"  href="<?php echo U("ShopUser/getuseraddress");?>?id=<?php echo ($vo["id"]); ?>"><i class="gicon-plane"></i></a>
                  <a class="btn btn-small" rel="tooltip" data-placement="left" data-original-title="用户积分"  href="<?php echo U("ShopJifen/update_info");?>?id=<?php echo ($vo["id"]); ?>"><i class="gicon-leaf"></i></a>
                  <a class="btn btn-small" rel="tooltip" data-placement="left" data-original-title="优惠卷"  href="<?php echo U("ShopUser/getusercoupon");?>?id=<?php echo ($vo["id"]); ?>"><i class="gicon-gift"></i></a><br>
                  <!--<a class="btn btn-small" rel="tooltip" data-placement="left" data-original-title="查看其以往订单"  href="#@"><i class="gicon-shopping-cart"></i></a>-->
                  <a class="btn btn-small" rel="tooltip" data-placement="left" data-original-title="修改其信息"  href="<?php echo U("ShopUser/update_info");?>?id=<?php echo ($vo["id"]); ?>"><i class="gicon-edit"></i></a>
                  <a class="btn btn-inverse btn-small" rel="tooltip" data-placement="bottom" data-original-title="快速修改账户状态"  onclick="if(confirm('确认修改账户状态吗?')) window.location='<?php echo U("ShopUser/del");?>?id=<?php echo ($vo["id"]); ?>'"><i class="gicon-remove icon-white"></i></a>
                </div>
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            
            </tbody>
            </table>
          
          
              <div class="row-fluid control-group">
              <div class="pull-left span6" action="#">
              </div>
              <div class="span6">
                <div class="pagination pull-right ">
                  <?php echo ($page); ?>
                </div>
                </div>
              </div>
          
            </div>
            <!-- End row-fluid -->
          </div>
          <!-- End .content -->
        </div>
        </div>
    
    
    
                                        
                                        
                                        
                                        </p>
                                    </div>


                                    <div class="tab-pane fade" id="profile2">
                                    
                                    
                                    
                                    
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
            <form class="form-horizontal row-fluid" action="<?php echo U("ShopUser/add");?>" method="post">
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">是否禁用*</label>
                <div class="controls span6">
                  <label class="inline radio">
                  <input type="radio" name="state" value="1"  checked="CHECKED"/>正常</label>
                  <label class="inline radio">
                  <input type="radio" name="state" value="0" />禁用 </label>
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">显示名(昵称)</label>
                <div class="controls span3">
                  <input type="text" id="normal-field" class="row-fluid" name="nname" value="" >
                </div>
              </div>
             <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">用户名*</label>
                <div class="controls span3">
                  <input type="text" id="normal-field" class="row-fluid" name="username" value="" >
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">密码*</label>
                <div class="controls span3">
                  <input type="text" id="normal-field" class="row-fluid" name="password" value="" >
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">性别*</label>
                <div class="controls span6">
                  <label class="inline radio">
                  <input type="radio" name="sex" value="1"  checked="CHECKED" /> 男</label>
                  <label class="inline radio">
                  <input type="radio" name="sex" value="0"   /> 女 </label>
                </div>
              </div>
             <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">邮箱*</label>
                <div class="controls span3">
                  <input type="text" id="normal-field" class="row-fluid" name="email" value="" >
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">头像</label>
                <div class="controls span9">
                  
                    <input type="text"  class="span5" name="face" id="upload_product_type"  value="" >
                    <input id="file_upload_product_type" name="file_upload_product_type" type="file" multiple="true" value="" />
   <script>
        var img = '';
		$('#file_upload_product_type').uploadify({
	        	'swf'      : '__PUBLIC__/uploadify/uploadify.swf',
	        	'uploader' : '<?php echo U("Index/uploadimg");?>',   //上传的方法
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
                <label class="control-label span2" for="normal-field">注册时间*</label>
                <div class="controls span3">
                  <div class="input-append date row-fluid" id="datepicker2" data-date="<?php echo date('Y-m-d',time()) ?>" data-date-format="yyyy-mm-dd">
                    <input type="text" value="<?php echo date('Y-m-d',time()) ?>" class="row-fluid"  name="regtime">
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
                <label class="control-label span2" for="normal-field">补充信息</label>
                <div class="controls span7">
                  <textarea rows="3" class="row-fluid autogrow" id="elastic-textarea"  name="bak1"></textarea>
                </div>
              </div>
              <div class="form-actions row-fluid">
                <div class="span7 offset3">
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
      &copy; XSSER CMS &nbsp;版本:<?php $config=C("XSSER_SYS_INFO"); echo $config['version']; ?>
      <!--最后更新:<?php $config=C("XSSER_SYS_INFO"); echo $config['up_time']; ?>-->
    </p>
</div>
   <!-- 网站底部版权层结束 --> <!-- End #footer -->
</div>
</div>
<!-- /container -->
<!-- Le javascript
    ================================================== -->
<script type="text/javascript">
    $(document).ready(function () {
        //$("input:checkbox, input:radio, input:file").uniform();
        $('textarea.autogrow').autogrow();
        var elem = $("#chars");
        $("#text").limiter(100, elem);
        // Mask plugin http://digitalbush.com/projects/masked-input-plugin/
        $("#mask-phone").mask("(999) 999-9999");
        $("#mask-date").mask("99-99-9999");
        $("#mask-int-phone").mask("+33 999 999 999");
        $("#mask-tax-id").mask("99-9999999");
        $("#mask-percent").mask("99%");
        // Editor plugin https://github.com/jhollingworth/bootstrap-wysihtml5/
        $('#editor1').wysihtml5({
          "image": false,
          "link": false
          });
        // Chosen select plugin
        $(".chzn-select").chosen({
          disable_search_threshold: 10
        });
        // Datepicker
        $('#datepicker1').datepicker({
          format: 'mm-dd-yyyy'
        });
        $('#datepicker2').datepicker();
        $('.colorpicker').colorpicker()
        $('#colorpicker3').colorpicker();
    });
    </script>
<script type='text/javascript'>
    $(window).load(function() {
     $('#loading').fadeOut();
    });

 $(document).ready(function() {
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