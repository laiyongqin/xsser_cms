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






<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="../../../html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
                  <i class=" icon-bar-chart"></i> 产品(高级自定义)栏目
                </h3>
            </div>
        </div><!-- End .title -->
        
        <div class="content">
            <div class="row-fluid">
               <!-- <a   onclick="#"  class="btn btn-info">新增</a>-->
                
                <!-- 弹出框 -->
          <!--      
          <div class="content">
          <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Launch demo modal</a>
          <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel">Modal Heading</h3>
            </div>
            <div class="modal-body">
              <h4>Text in a modal</h4>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

              <h4>Popover in a modal</h4>
              <p>This <a href="#" role="button" class="btn popover-test" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on hover.</p>

              <h4>Tooltips in a modal</h4>
              <p><a href="#" class="tooltip-test" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

              <hr>

              <h4>Overflowing text to show optional scrollbar</h4>
              <p>We set a fixed <code>max-height</code> on the <code>.modal-body</code>. Watch it overflow with all this extra lorem ipsum text we've included.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Close</button>
              <button class="btn btn-primary">Save changes</button>
            </div>
          </div>
          
        </div> --><!-- End .content -->
                <!-- 弹出框 -->
                
                
                
                
                
                
                
            </div>
        </div><!-- End .content -->
        
        <div class="content">
          <ul id="tabExample1" class="nav nav-tabs">
                                    <li class="active"><a href="#home1" data-toggle="tab">信息管理</a></li>
                                    <li><a href="#profile2" data-toggle="tab">增加产品</a></li>
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
              板块名
              </th>
              <th class="no_sort to_hide_phone">
              标题
              </th>
                    <th class="no_sort to_hide_phone">
              添加人(系统)
              </th>
              <th class="no_sort to_hide_phone">
            发布时间
              </th>
              <th class="no_sort to_hide_phone">
            缩略图
              </th>
              <th class="no_sort to_hide_phone">
            是否审核
              </th>
              <th class="no_sort to_hide_phone">
            是否推荐
              </th>
    <th class="ms no_sort ">
    排序
    </th>
    <th class="ms no_sort ">
    关联
    </th>
              <th class="ms no_sort ">
              操作
              </th>

            </tr>
            </thead>
            <tbody>
            <?php if(empty($thislist)): ?><tr><td colspan="9"><center><font style="color: red;font-size: 16px;">没有可以呈现的数据!</font></center></td></tr><?php endif; ?>
            <?php if(is_array($thislist)): $i = 0; $__LIST__ = $thislist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
              <td>
                <?php echo ($mymodualNtype["type_name"]); ?>
              </td>
              <td class="to_hide_phone">
               <div class="row-fluid">
               <?php echo (msubstr($vo["product_title"],0,25,"utf-8",true)); ?> 
               </div>
              </td>
              <td class="to_hide_phone">
                <?php echo (getadmin_name($vo["user_id"])); ?>
              </td>
              <td>
                <?php echo (date('Y-m-d',$vo["product_time"])); ?>
              </td>
              <td class="to_hide_phone">
                <!--<?php echo ($vo["view_count"]); ?>-->
                <?php if(trim($vo['product_pic_s'])!=""){ ?><img  src="<?php echo ($vo["product_pic_s"]); ?>" width="120" height="100"><?php } ?>
              </td>
              <td class="to_hide_phone">
               <?php if(($vo["active"]) == "1"): ?><font style="color: blue;">已审核</font><?php endif; if(($vo["active"]) == "0"): ?><font style="color: red;">未审核</font><?php endif; ?>
              </td>
              <td class="to_hide_phone">
               <?php if(($vo["product_reco"]) == "1"): ?><font style="color: blue;">推荐</font><?php endif; if(($vo["product_reco"]) == "0"): ?><font style="color: red;">不推荐</font><?php endif; ?>
              </td>
               <td class="to_hide_phone">
               <?php echo ($vo["show_level"]); ?>
              </td>
               <td class="to_hide_phone">
               <?php $tuijian_param_array=split('[|]',$vo[tuijian_id_group]); if($tuijian_param_array[0]>1){ foreach($this_type_list_tuijian as $value){ $isin = in_array($value['id'],$tuijian_param_array); if($isin){ echo $value['type_name']."<br>"; } } }else{ echo "无"; } ?>
              </td>
              <td class="ms">
                <div class="btn-group1">
                  <a class="btn btn-small" rel="tooltip" data-placement="left" data-original-title=" 修改"   href="<?php echo U("Productgaoji/update_info");?>?id=<?php echo ($vo["id"]); ?>"><i class="gicon-edit"></i></a>
                  <a class="btn btn-inverse btn-small" rel="tooltip" data-placement="bottom" data-original-title="删除"  onclick="if(confirm('确认删除吗?')) window.location='<?php echo U("Productgaoji/del");?>?id=<?php echo ($vo["id"]); ?>'"><i class="gicon-remove icon-white"></i></a>
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
            <form class="form-horizontal row-fluid" action="<?php echo U("Productgaoji/add");?>" method="post">
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">板块名称*</label>
                <div class="controls span7">
                  <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo ($mymodualNtype["type_name"]); ?>">
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">标题*</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="product_title"  >
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">缩略图</label>
                <div class="controls span9">
                  
                    <input type="text"  class="span5" name="product_pic_s" id="upload_product_pic_s"   >
                    <input id="file_product_pic_s" name="file_product_pic_s" type="file" multiple="true" value="" />
   <script>
        var img = '';
		$('#file_product_pic_s').uploadify({
	        	'swf'      : '__PUBLIC__/uploadify/uploadify.swf',
	        	'uploader' : '<?php echo U("Open/uploadthumbimg");?>',   //上传的方法
	        	'buttonText' : '缩略图上传',
	        	'onUploadSuccess' : function(file, data, response) {
	        	 var jsonimg=eval('('+data+')');
	        	 if(jsonimg.status==0){
	        		 alert(jsonimg.data);
	        	 }else{
		        	 img = "/Uploads/"+jsonimg.data;
		        	 $('#upload_product_pic_s').val(img);
	        	 }
        	}
    	});
    </script>
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">大图</label>
                <div class="controls span9">
                  
                    <input type="text"  class="span5" name="product_pic_b" id="upload_product_pic_b"   >
                    <input id="file_product_pic_b" name="file_product_pic_b" type="file" multiple="true" value="" />
   <script>
        var img = '';
		$('#file_product_pic_b').uploadify({
	        	'swf'      : '__PUBLIC__/uploadify/uploadify.swf',
	        	'uploader' : '<?php echo U("Open/uploadimg");?>',   //上传的方法
	        	'buttonText' : '大图上传',
	        	'onUploadSuccess' : function(file, data, response) {
	        	 var jsonimg=eval('('+data+')');
	        	 if(jsonimg.status==0){
	        		 alert(jsonimg.data);
	        	 }else{
		        	 img = "/Uploads/"+jsonimg.data;
		        	 $('#upload_product_pic_b').val(img);
	        	 }
        	}
    	});
    </script>
                </div>
              </div>
              

              

              	<?php if( strlen($muxing_shuxing_name)>0 && strlen($muxing_shuxing_type)>0) { for($i=0;$i<count($muxing_shuxing_name);$i++) { if($muxing_shuxing_type[$i]=="text") { ?>
			  <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="param<?php echo $i; ?>"  >
                </div>
              </div>
									<?php } elseif($muxing_shuxing_type[$i]=="area1") { ?>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span7">
                  <textarea rows="3" class="row-fluid autogrow" id="elastic-textarea"  name="param<?php echo $i; ?>"></textarea>
                </div>
              </div>
									<?php } elseif($muxing_shuxing_type[$i]=="area2") { ?>
			<div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span7">
                  <textarea  id="mydefault-textarea<?php echo $i; ?>" name="param<?php echo $i; ?>"></textarea>
                  <script type="text/javascript">    
                        var editor<?php echo $i; ?> = new baidu.editor.ui.Editor();    
                        editor<?php echo $i; ?>.render("mydefault-textarea<?php echo $i; ?>");//这里认的是上面控件的ID  
                  </script> 
                </div>
              </div>	
									<?php } elseif($muxing_shuxing_type[$i]=="upload") { ?>
			<div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span9">
                  
                    <input type="text"  class="span5" name="param<?php echo $i; ?>" id="upload_param<?php echo $i; ?>"   >
                    <input id="file_param<?php echo $i; ?>" name="file_param<?php echo $i; ?>" type="file" multiple="true" value="" />
   <script>
        var img = '';
		$('#file_param<?php echo $i; ?>').uploadify({
	        	'swf'      : '__PUBLIC__/uploadify/uploadify.swf',
	        	'uploader' : '<?php echo U("Open/uploadfile");?>',   //上传的方法
	        	'buttonText' : '上传',
	        	'onUploadSuccess' : function(file, data, response) {
	        	 var jsonimg=eval('('+data+')');
	        	 if(jsonimg.status==0){
	        		 alert(jsonimg.data);
	        	 }else{
		        	 img = "/Uploads/"+jsonimg.data;
		        	 $('#upload_param<?php echo $i; ?>').val(img);
	        	 }
        	}
    	});
    </script>
                </div>
              </div>
									<?php
 } elseif($muxing_shuxing_type[$i]=="pic") { ?>
			<div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span9">
                  
                    <input type="text"  class="span5" name="param<?php echo $i; ?>" id="upload_param<?php echo $i; ?>"   >
                    <input id="file_param<?php echo $i; ?>" name="file_param<?php echo $i; ?>" type="file" multiple="true" value="" />
   <script>
        var img = '';
		$('#file_param<?php echo $i; ?>').uploadify({
	        	'swf'      : '__PUBLIC__/uploadify/uploadify.swf',
	        	'uploader' : '<?php echo U("Open/uploadthumbimg");?>',   //上传的方法
	        	'buttonText' : '上传',
	        	'onUploadSuccess' : function(file, data, response) {
	        	 var jsonimg=eval('('+data+')');
	        	 if(jsonimg.status==0){
	        		 alert(jsonimg.data);
	        	 }else{
		        	 img = "/Uploads/"+jsonimg.data;
		        	 $('#upload_param<?php echo $i; ?>').val(img);
	        	 }
        	}
    	});
    </script>
                </div>
              </div>
									<?php } elseif($muxing_shuxing_type[$i]=="radio") { ?>
			  <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span6">
                  <label class="inline radio">
                  <input type="radio" name="param<?php echo $i; ?>" value="1"  checked="CHECKED" /> 是</label>
                  <label class="inline radio">
                  <input type="radio" name="param<?php echo $i; ?>" value="0"   /> 否 </label>
                </div>
              </div>
									<?php } elseif($muxing_shuxing_type[$i]=="radio2") { ?>
			  <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span6">
                <?php $radio2list=get_gaojimoxing_text_info($mymodualNtype['modual_id'],$muxing_table_field[$i]); foreach ($radio2list as $value) { ?>   
                  <label class="inline radio">
                  <input type="radio" name="param<?php echo $i; ?>" value="<?php echo ($value); ?>"  /><?php echo ($value); ?></label>                
                    <?php } ?>
                </div>
              </div>
									<?php } elseif($muxing_shuxing_type[$i]=="listtype") { ?>
			  <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span6">
                <select  class="chzn-select" id="default-select" name="param<?php echo $i; ?>">
                <?php $listtypelist=get_gaojimoxing_text_info($mymodualNtype['modual_id'],$muxing_table_field[$i]); foreach ($listtypelist as $value) { ?>
                  <option value="<?php echo ($value); ?>" ><?php echo ($value); ?></option>               
                    <?php } ?>
                 </select>
                </div>
              </div>
									<?php }elseif($muxing_shuxing_type[$i]=="checkbox") { ?>
			  <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span6">
                <?php $checkboxlist=get_gaojimoxing_text_info($mymodualNtype['modual_id'],$muxing_table_field[$i]); foreach ($checkboxlist as $value) { ?>
                    <label style="float: left;margin-left: 3px;"><input type="checkbox"  value="<?php echo ($value); ?>" name="param<?php echo $i; ?>[]"><?php echo ($value); ?></label>
                    <?php } ?>
                </div>
              </div>
									<?php }elseif($muxing_shuxing_type[$i]=="sqltype") { ?>
			  <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span6">
                <select  class="chzn-select" id="default-select" name="param<?php echo $i; ?>">
                <?php $sqltypelist=get_gaojimoxing_sql_info($mymodualNtype['modual_id'],$muxing_table_field[$i]); foreach ($sqltypelist as $value) { ?>
                  <option value="<?php echo ($value["product_title"]); ?>" ><?php echo ($value["product_title"]); ?></option>               
                    <?php } ?>
                 </select>
                </div>
              </div>
									<?php } else { ?>
			 <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field"><?php echo $muxing_shuxing_name[$i]; ?></label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="param<?php echo $i; ?>"  >
                </div>
              </div>
									<?php } } } ?>
              
              
              
              
              
              
              
              
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">内容*</label>
                <div class="controls span7">
                  <textarea  id="mydefault-textarea" name="product_content"></textarea>
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
                  <input type="radio" name="product_reco" value="1"  checked="CHECKED" /> 是</label>
                  <label class="inline radio">
                  <input type="radio" name="product_reco" value="0"   /> 否 </label>
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">发布人</label>
                <div class="controls span3">
                  <input type="text" id="normal-field" class="row-fluid" name="product_user" value="<?php echo ($news_user); ?>" >
                </div>
              </div>
             <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">发布时间*</label>
                <div class="controls span3">
                  <div class="input-append date row-fluid" id="datepicker2" data-date="<?php echo date('Y-m-d',time()); ?>" data-date-format="yyyy-mm-dd">
                    <input type="text" value="<?php echo date('Y-m-d',time()); ?>" class="row-fluid"  name="product_time">
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
              <!--<div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">最后修改时间*</label>
                <div class="controls span3">
                  <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo date('Y-m-d',time()); ?>">
                </div>
              </div>-->
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">查看次数*</label>
                <div class="controls span3">
                  <input type="text" id="normal-field" class="row-fluid"   name="view_count" value="0">
                </div>
              </div>
              
              <div class="form-row control-group row-fluid">
                <label class="control-label span2">是否审核*</label>
                <div class="controls span6">
                  <label class="inline radio">
                  <input type="radio" name="active" value="1"  checked="CHECKED"/> 是</label>
                  <label class="inline radio">
                  <input type="radio" name="active" value="0"  /> 否 </label>
                </div>
              </div>
              
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">排序数字*</label>
                <div class="controls span3">
                  <input type="text" id="normal-field" class="row-fluid" name="show_level" value="500">
                </div>
               <div class="control-label span3">
                  整数，数值越小排序越靠前，最小为1
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">title(标题)</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="title"  >
                </div>
              </div>
             <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">keyword(关键词)</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="keyword"  >
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">description(描述)</label>
                <div class="controls span7">
                  <textarea rows="3" class="row-fluid autogrow" id="elastic-textarea" placeholder="seo优化.." name="description"></textarea>
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span2" for="normal-field">补充信息</label>
                <div class="controls span7">
                  <textarea rows="3" class="row-fluid autogrow" id="elastic-textarea"  name="bak2"></textarea>
                </div>
              </div>
              <div class="form-row control-group row-fluid ">
                <label class="control-label span2">关联到</label>
                <div class="controls span7">
                  <?php if(is_array($this_type_list_tuijian)): $i = 0; $__LIST__ = $this_type_list_tuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label class="checkbox"><!-- checkbox inline -->
                     <input type="checkbox"   <?php if(($vo["id"]) == $mymodualNtype["id"]): ?>disabled="true"<?php endif; ?>   value="<?php echo ($vo["id"]); ?>" name="tuijian_id_group[]">
                     <?php if(($vo["type_rank"]) != "1"): echo (str_chengfa_nbsp($vo['type_rank'])); ?>| --<?php endif; echo ($vo["type_name"]); ?>
                     </label><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
              </div>
              <div class="form-actions row-fluid">
                <div class="span7 offset3">
                  <!--<input type="hidden" name="id" value="<?php echo ($mymodual["id"]); ?>" >-->
                  <input type="hidden" name="type_id" value="<?php echo ($_GET['type_id']); ?>" >
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
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="../Public/js/jquery.js"></script>-->
<!-- <script src='__PUBLIC__/jquery.js'></script>-->

<script type="text/javascript">
    $(document).ready(function () {
        //$("input:checkbox, input:radio, input:file").uniform();
      //  $('textarea.autogrow').autogrow();
       // var elem = $("#chars");
        //$("#text").limiter(100, elem);
        // Mask plugin http://digitalbush.com/projects/masked-input-plugin/
       // $("#mask-phone").mask("(999) 999-9999");
       // $("#mask-date").mask("99-99-9999");
        //$("#mask-int-phone").mask("+33 999 999 999");
        //$("#mask-tax-id").mask("99-9999999");
       // $("#mask-percent").mask("99%");
        // Editor plugin https://github.com/jhollingworth/bootstrap-wysihtml5/
        //$('#editor1').wysihtml5({
       //   "image": false,
       //   "link": false
       //   });
        // Chosen select plugin
        //$(".chzn-select").chosen({
        //  disable_search_threshold: 10
        //});
        // Datepicker
        //$('#datepicker1').datepicker({
        //  format: 'mm-dd-yyyy'
        //});
        //$('#datepicker2').datepicker();
        //$('.colorpicker').colorpicker()
        //$('#colorpicker3').colorpicker();
    });
    </script>
<script type='text/javascript'>
//$(window).load(function() {
//$('#loading').fadeOut();
//});

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