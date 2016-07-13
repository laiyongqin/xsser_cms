<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js" lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Page-Enter" content="blendTrans(Duration=0.2)">
<meta http-equiv="Page-Exit" content="blendTrans(Duration=0.2)">
<title><?php $config=C("XSSER_SYS_INFO"); echo $config['title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="../Public/css/images/favicon.png">
<!-- Le styles -->
<link href="../Public/css/twitter/bootstrap.css" rel="stylesheet">
<link href="../Public/css/base.css" rel="stylesheet">
<link href="../Public/css/responsive.css" rel="stylesheet">
<link href="../Public/css/jquery-ui-1.8.23.custom.css" rel="stylesheet">
<script src="../Public/js/plugins/modernizr.custom.32549.js"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
</head>
<body>
<!--<div id="loading">
  <img src="../Public/img/ajax-loader.gif">
</div>-->
<div id="responsive_part">
    <div class="logo">
      <a href="../Public/index.html"></a>
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
                  <i class=" icon-bar-chart"></i> 模型管理
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
                                    <li class="active"><a href="#home1" data-toggle="tab">普通模型</a></li>
                                    <li><a href="#profile1" data-toggle="tab">高级模型</a></li>
                                    <li><a href="#profile2" data-toggle="tab">增加模型</a></li>
           </ul>
           <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home1">
                                    
                                    
                                    
                                    
                                    
                                    
   
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
              模型名字
              </th>
              <th  style='width: 250px;word-break: break-all;word-wrap: break-word;'>
               属性显示名字
              </th>
              <th  style='width: 250px;word-break: break-all;word-wrap: break-word;'>
             属性对应类型
              </th>
              <th class="ms no_sort ">
              操作
              </th>
            </tr>
            </thead>
            <tbody>


           <?php if(is_array($pt_list)): $i = 0; $__LIST__ = $pt_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
              <td>
                <?php echo ($vo["modual_name"]); ?>
              </td>
              <td  style='width: 250px;word-break: break-all;word-wrap: break-word;'>
               <?php echo ($vo["shuxing_name"]); ?>
              </td>
              <td  style='width: 250px;word-break: break-all;word-wrap: break-word;'>
                <div class="row-fluid">
               <?php echo ($vo["shuxing_type"]); ?>
                </div>
              </td>
              <td class="ms">
                <div class="btn-group1">
                  <a class="btn btn-small" rel="tooltip" data-placement="left" data-original-title=" edit " href="<?php echo U("ConfigModual/update_info");?>?id=<?php echo ($vo["id"]); ?>"><i class="gicon-edit"></i></a>
                  <a class="btn btn-inverse btn-small" rel="tooltip" data-placement="bottom" data-original-title="Remove" href="#" onclick="if(confirm('确认删除吗?')) window.location='<?php echo U("ConfigModual/del");?>?id=<?php echo ($vo["id"]); ?>'"><i class="gicon-remove icon-white"></i></a>
                </div>
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>


            
            </tbody>
            </table>
            <!-- <div class="row-fluid control-group">
              <div class="pull-left span6" action="#">
              </div>
              <div class="span6">
                <div class="pagination pull-right ">
                  <ul>
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                  </ul>
                </div> </div>
              </div>-->
            </div>
            <!-- End row-fluid -->
          </div>
          <!-- End .content -->
        </div>
        </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                      
                                    </div>
                                    <div class="tab-pane fade" id="profile1">





  
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
              模型名字
              </th>
              <th  style='width: 200px;word-break: break-all;word-wrap: break-word;'>
               属性显示名字
              </th>
              <th  style='width: 200px;word-break: break-all;word-wrap: break-word;'>
             属性对应类型
              </th>
              <th class="to_hide_phone ue no_sort">
           数据库中表名(高级模型)
              </th>
              <th  style='width: 200px;word-break: break-all;word-wrap: break-word;'>
           表中对应字段(高级模型)
              </th>
              <th class="ms no_sort ">
              操作
              </th>
            </tr>
            </thead>
            <tbody>

           
            <?php if(is_array($gj_list)): $i = 0; $__LIST__ = $gj_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
              <td>
                <?php echo ($vo["modual_name"]); ?>
              </td>
              <td  style='width: 200px;word-break: break-all;word-wrap: break-word;'>
                <?php echo ($vo["shuxing_name"]); ?>
              </td>
              <td  style='width: 200px;word-break: break-all;word-wrap: break-word;'>
                <div class="row-fluid">
                 <?php echo ($vo["shuxing_type"]); ?>
                </div>
              </td>
              <td class="to_hide_phone">
                <?php echo ($vo["database_table"]); ?>
              </td>

              <td  style='width: 200px;word-break: break-all;word-wrap: break-word;'>
                <?php echo ($vo["table_field"]); ?>
              </td>
              <td class="ms">
                <div class="btn-group1">
                  <a class="btn btn-small" rel="tooltip" data-placement="left" data-original-title=" edit " href="<?php echo U("ConfigModual/update_info");?>?id=<?php echo ($vo["id"]); ?>"><i class="gicon-edit"></i></a>
                   <a class="btn btn-small" rel="tooltip" data-placement="left" data-original-title=" 编辑字段中数据 " href="<?php echo U("ConfigModual/update_gaojifield_content");?>?id=<?php echo ($vo["id"]); ?>" target="_blank"><i class="icon-bar-chart"></i></a>
                  <a class="btn btn-inverse btn-small" rel="tooltip" data-placement="bottom" data-original-title="Remove" href="#"  onclick="if(confirm('确认删除吗?')) window.location='<?php echo U("ConfigModual/del");?>?id=<?php echo ($vo["id"]); ?>'"><i class="gicon-remove icon-white"></i></a>
                </div>
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            
            </tbody>
            </table>
            <!-- <div class="row-fluid control-group">
              <div class="pull-left span6" action="#">
              </div>
              <div class="span6">
                <div class="pagination pull-right ">
                  <ul>
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                  </ul>
                </div> </div>
              </div>-->
            </div>
            <!-- End row-fluid -->
          </div>
          <!-- End .content -->
        </div>
        </div>
                                 







                                    </div>
                                    <div class="tab-pane fade" id="profile2">





  <p>
                                        
   <!--  -->
            <div class="row-fluid">
             <div class="span10">
             
        <div class="box gradient">
          <!-- <div class="title">
            <h3>
            <i class="icon-book"></i><span>Input Fields</span>
            </h3>
          </div>-->
          <div class="content">
            <form class="form-horizontal row-fluid" action="<?php echo U("ConfigModual/add");?>" method="post">
              <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">模型名字*</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="modual_name">
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">属性显示名字*</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="shuxing_name">
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">属性对应类型*</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="shuxing_type">
                </div>
              </div>
               <div class="form-row control-group row-fluid">
                <label class="control-label span3">是否创建数据库表* </label>
                <div class="controls span7">
                  <label class="inline radio">
                  <input type="radio" name="modual_type" value="0" checked="CHECKED"/> 否 </label>
                  <label class="inline radio">
                  <input type="radio" name="modual_type" value="1" /> 是 </label>
                </div>
              </div>
             <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">数据库中表名(高级模型)</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="database_table">
                </div>
              </div>
              <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">表中对应字段(高级模型)</label>
                <div class="controls span7">
                  <input type="text" id="normal-field" class="row-fluid" name="table_field">
                </div>
              </div>
              <div class="form-actions row-fluid">
                <div class="span7 offset3">
                  <button type="submit" class="btn btn-primary">保存</button>
                  <!--<button type="button" class="btn btn-secondary">Cancel</button>-->
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
           </div>
        </div> <!-- End .content -->
    </div><!-- End .span6 .box -->
    
    
    
    
    <div class="row-fluid">
    <div class="box gradient span12">


        <div class="title">
          <h3>
          <i class=" icon-bar-chart"></i><span>属性对应类型</span>
          </h3>
        </div>
        <!-- End .title -->
        <div class="content">
       
<table class="table table-condensed table-striped">
  <thead>
    <tr>
      <th> 类型标识</th>
      <th> 对应html表单类型</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>text</td>
      <td>普通文本输入框</td>
    </tr>
    <tr>
      <td>area1</td>
      <td>普通小型描述框</td>
    </tr>
    <tr>
      <td>area2</td>
      <td>富文本编辑器描述框</td>
    </tr>
    <tr>
      <td>upload</td>
      <td>上传图片，文件</td>
    </tr>
    <tr>
      <td>pic</td>
      <td>上传图片(加水印等)</td>
    </tr>
    <tr>
      <td>radio</td>
      <td>单选框(普通,只有"是"和"否"这两个选项)</td>
    </tr>
    <tr>
      <td>radio2</td>
      <td>高级复选框(高级模型专属，普通模型只识别为text类型)</td>
    </tr>
    <tr>
      <td>listtype</td>
      <td>下拉列表(高级模型专属，普通模型只识别为text类型)</td>
    </tr>
    <tr>
      <td>checkbox</td>
      <td>多选框(高级模型专属，普通模型只识别为text类型)</td>
    </tr>
    <tr>
      <td>sqltype</td>
      <td>SQL类型(高级模型专属，普通模型只识别为text类型)</td>
    </tr>
    <tr>
      <td colspan="2"><font style="color: red;">注意:数据库中表名(高级模型)、表中对应字段(高级模型)尽量使用拼音或英文,且不能重复(也不能是mysql数据库sql语句关键字)，否则可能导致数据库表创建失败！</font></td>
    </tr>
  </tbody>
</table>

        </div>
 
    
    </div>
    </div>


</div><!-- End .row-fluid -->




    </div>
    <!-- End #container -->
  </div>
   <!-- 网站底部版权层开始 -->
<div id="footer">
    <p>
      &copy; XSSER CMS &nbsp;版本:<?php $config=C("XSSER_SYS_INFO"); echo $config['version']; ?> (简约而不简单)
      <!--最后更新:<?php $config=C("XSSER_SYS_INFO"); echo $config['up_time']; ?>-->
    </p>
</div>
   <!-- 网站底部版权层结束 -->
</div>
</div>
<!-- /container -->
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../Public/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/jquery.sparkline.min.js"></script>
<script src="../Public/js/plugins/excanvas.compiled.js"></script>
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
<script language="javascript" type="text/javascript" src="../Public/js/plugins/flot/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/flot/jquery.flot.stack.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/flot/jquery.flot.pie.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/flot/jquery.flot.resize.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/jquery.peity.min.js"></script>
<script type="text/javascript" language="javascript" src="../Public/js/plugins/datatables/js/jquery.dataTables.js"></script>
<script src="../Public/js/plugins/justGage.1.0.1/resources/js/raphael.2.1.0.min.js"></script>
<script src="../Public/js/plugins/justGage.1.0.1/resources/js/justgage.1.0.1.min.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/plugins/full-calendar/fullcalendar.min.js"></script>


<script src="../Public/js/scripts.js"></script>
<script language="javascript" type="text/javascript" src="../Public/js/jnavigate.jquery.min.js"></script>
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
      $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'Click for PixelGrade',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://pixelgrade.com/'
            }
          ]
        });
      });
    </script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      var dontSort = [];
                $('#datatable_example thead th').each( function () {
                    if ( $(this).hasClass( 'no_sort' )) {
                        dontSort.push( { "bSortable": false } );
                    } else {
                        dontSort.push( null );
                    }
      } );
      $('#datatable_example').dataTable( {
        "sDom": "<'row table_top_bar'<'row-fluid'>'<'to_hide_phone'>'f'<'>r>t<'row'>",
         "sDom": "<'row table_top_bar'<'row-fluid'<'to_hide_phone' f>>><'row'>",
        "aaSorting": [[ 4, "asc" ]],
        "bPaginate": false,
        "bJQueryUI": false,
        "aoColumns": dontSort
      } );
      $.extend( $.fn.dataTableExt.oStdClasses, {
        "s`": "dataTables_wrapper form-inline"
      } );
    } );
</script>

<script type="text/javascript">
    $(function () {
    
    var sin = [], cos = [], tes = [];
    for (var i = 0; i < 14; i += 1) {
      sin.push([i, Math.sin(i)*Math.random()*0.9]);
      cos.push([i, Math.cos(i)*Math.random()*1.4]);
      tes.push([i, Math.cos(i)*Math.random()*0.4]);
    }
    var plot = $.plot($("#placeholder"),
     [  { data: sin, label: "Google+", color:"#ef4723", shadowSize:0 }, { data: cos, label: "Envato", color:"#a1d14d", shadowSize:0},  { data: tes, label: "Facebook", color:"#4a8cf7", shadowSize:0 } ], {
       series: {
         lines: { show: true, fill:true },
         points: { show: true, fill:true },
       },
       grid: { hoverable: true, clickable: true, autoHighlight: false, borderWidth:0,  backgroundColor: { colors: ["#fff", "#fbfbfb"] } },
       yaxis: { min: -1.5, max: 1.5 },
     });
    function showTooltip(x, y, contents) {
      $('<div id="tooltip">' + contents + '</div>').css( {
        position: 'absolute',
        display: 'none',
        top: y + 5,
        left: x + 5,
        border: '1px solid #ccc',
        padding: '2px 6px',
        'background-color': '#fff',
        opacity: 0.80
      }).appendTo("body").fadeIn(200);
    }
    var previousPoint = null;
    $("#placeholder").bind("plothover", function (event, pos, item) {
      $("#x").text(pos.x.toFixed(2));
      $("#y").text(pos.y.toFixed(2));
      if (item) {
        if (previousPoint != item.dataIndex) {
          previousPoint = item.dataIndex;
          $("#tooltip").remove();
          var x = item.datapoint[0].toFixed(2),
          y = item.datapoint[1].toFixed(2);
          showTooltip(item.pageX, item.pageY,
            item.series.label + " of " + x + " = " + y);
        }
      }
    });
  });
$(function () {
  var data = [];
  var series = Math.floor(Math.random()*5)+1;
  data[0] = { label: "Google+", data:42, color: "#cb4b4b" };
  data[1] = { label: "Envato", data:27, color: "#4da74d"};
  data[2] = { label: "Pinterest", data:9, color: "#edc240"};
  data[3] = { label: "Facebook", data:22, color: "#5e96ea"};
  // DONUT
   $.plot($("#donut"), data,
    {
            series: {
            pie: { 
              show: true,
              innerRadius: 0.42,
              highlight: {
                opacity: 0.3
              },
              radius: 1,
              stroke: {
                color: '#fff',
                width: 4
              },
              startAngle: 0,
              combine: {
                          color: '#353535',
                          threshold: 0.05
              },
              label: {
                          show: true,
                          radius: 1,
                          formatter: function(label, series){
                              return '<div class="chart-label">'+label+'&nbsp;'+Math.round(series.percent)+'%</div>';
                          }
                      }
              },
              grow: { active: false}
              },
              legend:{show:true},
              grid: {
                      hoverable: true,
                      clickable: true
              },
    });
});
</script>
</body>
</html>