
CREATE TABLE `xsser_address` (
  `id` bigint(20) NOT NULL auto_increment,
  `user_id` bigint(20) NOT NULL COMMENT '用户ID',
  `changyong` int(11) NOT NULL default '0' COMMENT '常用地址',
  `shouhuo_name` varchar(200) NOT NULL COMMENT '收货名字',
  `shouhuo_tel` varchar(200) NOT NULL COMMENT '收货电话',
  `shouhuo_address` varchar(200) NOT NULL COMMENT '收货地址',
  `bak1` varchar(500) NOT NULL,
  `bak` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('1','1','1','王晓明','15098612360','山东省烟台市芝罘区只楚某某西街12号','','');
CREATE TABLE `xsser_admin` (
  `id` bigint(20) NOT NULL auto_increment,
  `admin_user` varchar(50) NOT NULL COMMENT '用户名',
  `admin_pass` varchar(50) NOT NULL COMMENT '密码',
  `admin_uuid` varchar(100) NOT NULL COMMENT 'UUID标识',
  `login_ip` varchar(30) NOT NULL COMMENT '登录ip',
  `login_time` bigint(20) unsigned NOT NULL default '0' COMMENT '登录时间',
  `admin_rank` tinyint(4) unsigned NOT NULL default '1' COMMENT '管理员等级',
  `admin_power` tinyint(4) NOT NULL COMMENT '权限',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
insert into `xsser_admin`(`id`,`admin_user`,`admin_pass`,`admin_uuid`,`login_ip`,`login_time`,`admin_rank`,`admin_power`) values('1','wzq','f34a1acaad91e14200247aa2c68c6118','793d91e2-ef0d-0ab3-405f-b0aa0be6f094','11.85.63.53','1412847387','0','1');
insert into `xsser_admin`(`id`,`admin_user`,`admin_pass`,`admin_uuid`,`login_ip`,`login_time`,`admin_rank`,`admin_power`) values('7','weihu','158dc2d53366fd1fddf958e9a78d2f91','639583db-d653-0987-666e-863acc2d26cd','127.0.0.1','1460348170','1','3');
insert into `xsser_admin`(`id`,`admin_user`,`admin_pass`,`admin_uuid`,`login_ip`,`login_time`,`admin_rank`,`admin_power`) values('8','guanli','b58f80798fe58a9595f308273e3fdaaf','ebb16ed3-3ef3-89c4-afb2-a20642a310e3','127.0.0.1','1460529247','1','2');
CREATE TABLE `xsser_basket` (
  `id` bigint(20) NOT NULL auto_increment,
  `user_id` bigint(20) NOT NULL COMMENT '用户ID',
  `product_id` bigint(20) NOT NULL COMMENT '产品id',
  `number` bigint(20) NOT NULL default '0' COMMENT '数量',
  `ctime` int(20) NOT NULL COMMENT '创建时间',
  `bak1` varchar(800) NOT NULL,
  `bak2` varchar(800) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `xsser_conf` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `conf` varchar(60) NOT NULL COMMENT '键',
  `value` longtext NOT NULL COMMENT '值',
  `bak1` longtext NOT NULL,
  `bak2` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('4','网站标题','青岛XXX有限公司','','');
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('5','网站关键词','青岛XXX有限公司','','');
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('6','网站描述','青岛XXX有限公司','','');
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('7','发件邮箱地址','xsser@xsser.cc','','');
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('8','邮箱SMTP服务器','smtp.qq.com','','');
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('9','邮箱登录帐号','xsser@xsser.cc','','');
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('10','邮箱密码','wzq11111','','');
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('11','邮箱收件箱','969333313@qq.com','','');
CREATE TABLE `xsser_coupon` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL COMMENT '优惠卷名字',
  `price` decimal(40,0) NOT NULL default '0' COMMENT '代表价值',
  `description` varchar(800) NOT NULL COMMENT '描述',
  `ftime` bigint(20) NOT NULL COMMENT '发布时间',
  `gtime` bigint(20) NOT NULL COMMENT '过期时间',
  `bak1` varchar(800) NOT NULL,
  `bak2` varchar(800) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
insert into `xsser_coupon`(`id`,`name`,`price`,`description`,`ftime`,`gtime`,`bak1`,`bak2`) values('1','商场上线全场订单减10元','10','商场上线全场订单减10元','1460044800','1485964800','','');
CREATE TABLE `xsser_coupon_give` (
  `id` bigint(20) NOT NULL auto_increment,
  `ftime` int(20) NOT NULL COMMENT '发放时间',
  `user_id` bigint(20) NOT NULL COMMENT '用户id',
  `admin_id` bigint(20) NOT NULL COMMENT '发放的管理员ID',
  `coupon_id` bigint(20) NOT NULL COMMENT '优惠券id',
  `is_use` int(20) NOT NULL default '0' COMMENT '是否使用',
  `bak1` varchar(800) NOT NULL,
  `bak2` varchar(800) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('1','1460102016','1','5','1','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('2','1460439611','1','5','1','0','','');
CREATE TABLE `xsser_goumai` (
  `id` bigint(20) NOT NULL auto_increment,
  `user_id` bigint(20) NOT NULL COMMENT '用户id',
  `product_id` bigint(20) NOT NULL COMMENT '产品id',
  `order_id` bigint(20) NOT NULL COMMENT '订单id',
  `number` bigint(20) NOT NULL default '0' COMMENT '购买数量',
  `ctime` int(20) NOT NULL COMMENT '创建时间',
  `bak1` varchar(800) NOT NULL,
  `bak2` varchar(800) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `xsser_info` (
  `id` bigint(20) NOT NULL auto_increment,
  `type_id` int(11) default NULL COMMENT '类型ID',
  `time` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `info1` varchar(500) NOT NULL,
  `info2` varchar(500) NOT NULL,
  `info3` varchar(500) NOT NULL,
  `info4` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('1','1','1460431056','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('2','1','1460461583','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('3','1','1460461721','127.0.0.1','登录成功! 帐号:weihu','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('4','1','1460462096','127.0.0.1','登录成功! 帐号:weihu','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('5','1','1460462172','127.0.0.1','登录成功! 帐号:weihu','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('6','1','1460512111','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('7','1','1460512786','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('8','1','1460512828','127.0.0.1','登录成功! 帐号:weihu','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('9','1','1460533064','127.0.0.1','登录成功! 帐号:guanli','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('10','1','1460533267','127.0.0.1','登录成功! 帐号:weihu','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('11','1','1460535581','127.0.0.1','登录成功! 帐号:wzq','','','');
CREATE TABLE `xsser_jifen` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` int(20) NOT NULL COMMENT '操作时间',
  `user_id` bigint(20) NOT NULL COMMENT '用户id',
  `admin_id` int(11) NOT NULL,
  `jilu` varchar(255) NOT NULL COMMENT '记录描述',
  `bak1` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('1','1460101993','1','5','执行了(增加10分)操作','');
CREATE TABLE `xsser_modual` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `modual_type` tinyint(3) unsigned NOT NULL default '0' COMMENT '是否是创建数据表类型 1是 0不是',
  `database_table` varchar(200) NOT NULL COMMENT '数据库中表的名字',
  `modual_name` varchar(60) NOT NULL COMMENT '模型名字',
  `shuxing_name` varchar(800) NOT NULL COMMENT '属性显示名',
  `shuxing_type` varchar(800) NOT NULL COMMENT '属性类型',
  `table_field` varchar(800) NOT NULL COMMENT '数据库中的字段名',
  `active` tinyint(7) unsigned NOT NULL default '1' COMMENT '是否审核',
  `show_level` smallint(10) unsigned NOT NULL default '500' COMMENT '显示顺序',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('41','0','','全功能测试','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('42','0','','招聘人才','姓名|个人简单介绍|工作经历|上传简历','text|area1|area2|upload','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('54','0','new_modual_','默认','描述','area1','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('55','0','new_modual_','合作伙伴','图片|链接地址','upload|text','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('56','1','new_modual_ceshi','高级全功能测试','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','text|area1|area2|upload|pic|radio','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('57','0','new_modual_','网站定制','姓名|联系方式|所属行业|网站色调|周期要求|网站预算|网站类型|补充说明','text|text|text|text|text|text|text|area1','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('58','0','new_modual_','首页轮播图片','小图片|大图片','upload|upload','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('59','0','new_modual_','万佳网站定制','姓名|联系方式|所属行业|网站主色调|周期要求|网站预算|网站类型|补充要求','text|text|text|text|text|text|area1|area1','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('60','0','new_modual_','客户见证','公司简介|客户见证','text|area1','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('61','0','new_modual_','在线留言','姓名|电话|留言','text|text|area1','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('62','0','new_modual_','制冷设备产品','产品型号|产品范围|产品简介|产品特点|应用领域','text|area1|area2|area2|area2','','1','500');
CREATE TABLE `xsser_new_modual_ceshi` (
  `id` bigint(20) NOT NULL auto_increment,
  `text` varchar(500) default NULL,
  `area1` varchar(800) default NULL,
  `area2` text,
  `upload` varchar(500) default NULL,
  `pic` varchar(500) default NULL,
  `radio` tinyint(3) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
CREATE TABLE `xsser_news` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `type_id` int(5) unsigned NOT NULL default '0' COMMENT '类型ID',
  `user_id` bigint(200) default NULL COMMENT '用户ID',
  `news_title` varchar(100) NOT NULL COMMENT '信息名字',
  `news_content` longtext NOT NULL COMMENT '信息内容',
  `news_reco` tinyint(4) unsigned NOT NULL default '0' COMMENT '是否推荐',
  `news_user` varchar(30) NOT NULL COMMENT '用户名字',
  `news_time` int(40) unsigned NOT NULL default '0' COMMENT '创建时间',
  `news_modify_time` int(40) unsigned NOT NULL default '0' COMMENT '修改时间',
  `news_view_time` int(40) unsigned NOT NULL default '0' COMMENT '查看时间',
  `view_count` bigint(20) NOT NULL COMMENT '查看次数',
  `active` tinyint(5) unsigned NOT NULL default '1' COMMENT '是否审核',
  `show_level` smallint(5) unsigned NOT NULL default '500' COMMENT '显示顺序',
  `title` varchar(200) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `php_page` varchar(100) NOT NULL,
  `html_page` varchar(100) NOT NULL,
  `bak1` varchar(500) NOT NULL,
  `bak2` varchar(500) NOT NULL,
  `ip` varchar(100) default NULL,
  PRIMARY KEY  (`id`),
  KEY `news_title` (`news_title`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;
CREATE TABLE `xsser_news_type` (
  `id` smallint(6) unsigned NOT NULL auto_increment,
  `type_name` varchar(100) NOT NULL COMMENT '类型名',
  `type_type` tinyint(4) unsigned NOT NULL default '0' COMMENT '类型，0单页 1新闻',
  `type_rank` tinyint(4) unsigned NOT NULL default '1' COMMENT '类别等级',
  `type_parent` smallint(6) unsigned NOT NULL default '0' COMMENT '父ID',
  `active` tinyint(5) unsigned NOT NULL default '1' COMMENT '是否审核',
  `show_level` smallint(6) unsigned NOT NULL default '500' COMMENT '显示顺序',
  `isshow` tinyint(3) unsigned NOT NULL default '1' COMMENT '是否显示',
  `title` varchar(200) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `php_page` varchar(100) NOT NULL default '',
  `html_page` varchar(100) NOT NULL,
  `bak1` varchar(500) NOT NULL,
  `bak2` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
CREATE TABLE `xsser_order` (
  `id` bigint(11) NOT NULL auto_increment,
  `order_number` varchar(255) NOT NULL COMMENT '订单号',
  `user_id` bigint(30) NOT NULL COMMENT '用户ID',
  `coupon_give_id` bigint(30) NOT NULL COMMENT '优惠券发放表的ID',
  `yingfukuan` decimal(40,0) NOT NULL COMMENT '应付款',
  `shijifukuan` decimal(40,0) NOT NULL COMMENT '实际付款',
  `state` int(20) NOT NULL COMMENT '订单状态',
  `yunfei_id` int(20) NOT NULL COMMENT '邮费表ID，保留字段',
  `bak1` varchar(800) NOT NULL,
  `bak2` varchar(800) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `xsser_product` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `type_id` int(6) NOT NULL default '0' COMMENT '类型ID',
  `user_id` bigint(100) default NULL COMMENT '用户ID',
  `product_title` varchar(100) NOT NULL COMMENT '产品标题',
  `product_pic_s` varchar(50) default NULL COMMENT '小图',
  `product_pic_b` varchar(50) default NULL COMMENT '大图',
  `product_content` text COMMENT '内容描述',
  `product_reco` tinyint(3) unsigned NOT NULL default '0' COMMENT '是否推荐',
  `product_user` varchar(30) default 'admin' COMMENT '用户名',
  `product_time` int(10) unsigned NOT NULL default '0' COMMENT '添加时间',
  `product_modify_time` int(40) unsigned NOT NULL default '0' COMMENT '修改时间',
  `product_view_time` int(10) unsigned NOT NULL default '0' COMMENT '查看时间',
  `view_count` int(40) default '0',
  `param` text NOT NULL COMMENT '内容分割项',
  `tuijian_id_group` varchar(300) default NULL,
  `active` tinyint(3) unsigned NOT NULL default '1' COMMENT '是否审核',
  `show_level` smallint(5) unsigned NOT NULL default '500' COMMENT '显示顺序',
  `title` varchar(200) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `php_page` varchar(100) NOT NULL,
  `html_page` varchar(100) NOT NULL,
  `bak1` varchar(500) NOT NULL,
  `bak2` varchar(500) NOT NULL,
  `ip` varchar(100) default NULL COMMENT '发布的IP',
  PRIMARY KEY  (`id`),
  KEY `product_title` (`product_title`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=417 DEFAULT CHARSET=utf8;
CREATE TABLE `xsser_product_type` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `type_name` varchar(100) NOT NULL COMMENT '类型名',
  `type_type` tinyint(5) unsigned NOT NULL default '1',
  `type_rank` tinyint(5) unsigned NOT NULL default '1' COMMENT '级别',
  `type_parent` smallint(5) unsigned NOT NULL default '0' COMMENT '父ID',
  `modual_id` int(60) NOT NULL COMMENT '模型id',
  `database_table` varchar(200) NOT NULL COMMENT '数据库表',
  `shuxing_name` varchar(800) NOT NULL COMMENT '属性显示名',
  `shuxing_type` varchar(800) NOT NULL COMMENT '属性类型',
  `table_field` varchar(800) NOT NULL COMMENT '属性数据库字段名',
  `active` tinyint(5) unsigned NOT NULL default '1' COMMENT '是否审核',
  `show_level` smallint(5) unsigned NOT NULL default '500' COMMENT '显示顺序',
  `isshow` tinyint(5) unsigned NOT NULL default '1' COMMENT '是否显示',
  `title` varchar(200) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `php_page` varchar(100) NOT NULL,
  `html_page` varchar(100) NOT NULL,
  `bak1` varchar(500) NOT NULL,
  `bak2` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8;
CREATE TABLE `xsser_quanxian_caozuomodule` (
  `id` int(11) NOT NULL auto_increment,
  `power_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `view` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('13','2','1','1');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('14','2','2','1');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('15','2','4','1');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('16','2','5','1');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('17','2','8','1');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('18','2','3','1');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('19','2','6','1');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('20','2','9','0');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('21','2','7','0');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('22','3','2','1');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('23','3','3','1');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('24','3','4','0');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('25','3','1','1');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('26','3','5','0');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('27','3','7','0');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('28','3','6','0');
insert into `xsser_quanxian_caozuomodule`(`id`,`power_id`,`module_id`,`view`) values('29','3','9','0');
CREATE TABLE `xsser_quanxian_caozuon` (
  `id` int(11) NOT NULL auto_increment,
  `power_id` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `add` tinyint(4) NOT NULL default '0',
  `del` tinyint(4) NOT NULL default '0',
  `up` tinyint(4) NOT NULL default '0',
  `select` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
insert into `xsser_quanxian_caozuon`(`id`,`power_id`,`nid`,`add`,`del`,`up`,`select`) values('10','2','30','1','1','1','1');
insert into `xsser_quanxian_caozuon`(`id`,`power_id`,`nid`,`add`,`del`,`up`,`select`) values('14','3','30','0','0','0','0');
CREATE TABLE `xsser_quanxian_caozuop` (
  `id` int(11) NOT NULL auto_increment,
  `power_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `add` tinyint(4) NOT NULL default '0',
  `del` tinyint(4) NOT NULL default '0',
  `up` tinyint(4) NOT NULL default '0',
  `select` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
CREATE TABLE `xsser_quanxian_moduletable` (
  `id` int(11) NOT NULL auto_increment,
  `module_name` varchar(300) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
insert into `xsser_quanxian_moduletable`(`id`,`module_name`) values('1','单页栏目');
insert into `xsser_quanxian_moduletable`(`id`,`module_name`) values('2','新闻栏目');
insert into `xsser_quanxian_moduletable`(`id`,`module_name`) values('3','产品(普通自定义)栏目');
insert into `xsser_quanxian_moduletable`(`id`,`module_name`) values('4','其他自定义栏目');
insert into `xsser_quanxian_moduletable`(`id`,`module_name`) values('5','产品(高级自定义)栏目');
insert into `xsser_quanxian_moduletable`(`id`,`module_name`) values('6','商城系统');
insert into `xsser_quanxian_moduletable`(`id`,`module_name`) values('7','系统设置与管理');
insert into `xsser_quanxian_moduletable`(`id`,`module_name`) values('8','评论管理');
insert into `xsser_quanxian_moduletable`(`id`,`module_name`) values('9','工具箱');
CREATE TABLE `xsser_quanxian_power` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) character set utf8 NOT NULL,
  `rank` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
insert into `xsser_quanxian_power`(`id`,`name`,`rank`) values('1','系统管理员','0');
insert into `xsser_quanxian_power`(`id`,`name`,`rank`) values('2','管理员','1');
insert into `xsser_quanxian_power`(`id`,`name`,`rank`) values('3','维护人员','2');
CREATE TABLE `xsser_reply` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` bigint(20) default NULL COMMENT '用户ID',
  `posts_id` bigint(20) NOT NULL COMMENT '回复文章的ID',
  `show` int(11) NOT NULL COMMENT '是否回复',
  `content` longtext character set utf8 collate utf8_bin NOT NULL COMMENT '回复的内容',
  `ip` varchar(24) character set utf8 collate utf8_bin NOT NULL COMMENT '回复者的IP',
  `time` int(20) NOT NULL COMMENT '回复的时间',
  `bak1` varchar(1000) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
insert into `xsser_reply`(`id`,`user_id`,`posts_id`,`show`,`content`,`ip`,`time`,`bak1`) values('1','5','1','0','你好哦111','127.0.0.1','1460389754','');
CREATE TABLE `xsser_replyposts` (
  `id` bigint(20) NOT NULL auto_increment COMMENT 'ID',
  `user_id` bigint(20) default NULL COMMENT '用户ID',
  `posts_id` bigint(20) NOT NULL COMMENT '回复文章的ID',
  `norp` smallint(1) default '0' COMMENT '是不是循环对话  0不是 1是    是的话posts_id是本表的ID',
  `show` int(11) NOT NULL COMMENT '是否回复',
  `content` longtext character set utf8 collate utf8_bin NOT NULL COMMENT '回复的内容',
  `name` varchar(24) character set utf8 collate utf8_bin NOT NULL COMMENT '回复者的名字',
  `email` varchar(64) character set utf8 collate utf8_bin NOT NULL COMMENT '回复者的邮箱',
  `site` varchar(64) character set utf8 collate utf8_bin NOT NULL COMMENT '回复者的站点',
  `ip` varchar(24) character set utf8 collate utf8_bin NOT NULL COMMENT '回复者的IP',
  `time` int(20) NOT NULL COMMENT '回复的时间',
  `bak1` varchar(1000) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
insert into `xsser_replyposts`(`id`,`user_id`,`posts_id`,`norp`,`show`,`content`,`name`,`email`,`site`,`ip`,`time`,`bak1`) values('1','5','402','1','1','哈哈啊哈哈','张三','email@qq.com','','127.0.0.1','0','');
CREATE TABLE `xsser_user` (
  `id` bigint(50) NOT NULL auto_increment,
  `uuid` varchar(50) NOT NULL COMMENT 'UUID标识',
  `state` int(11) NOT NULL default '1' COMMENT '账户状态',
  `nname` varchar(100) default NULL COMMENT '显示名字',
  `username` varchar(100) NOT NULL COMMENT '用户名',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `sex` int(2) NOT NULL default '1' COMMENT '性别',
  `email` varchar(100) NOT NULL COMMENT '邮箱',
  `jifen` bigint(100) NOT NULL default '0' COMMENT '积分',
  `address_id` bigint(100) NOT NULL COMMENT '地址ID',
  `face` varchar(250) NOT NULL COMMENT '头像',
  `regtime` int(200) NOT NULL COMMENT '注册时间',
  `regip` varchar(100) NOT NULL,
  `bak1` varchar(500) NOT NULL,
  `bak2` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('1','392b074c-1d48-464e-5fe2-1db2ecbc98fa','1','小明','tester','c237b899ec4eadf22c96206de4d7d5ed','1','123456789@qq.com','10','0','','1460044800','127.0.0.1','','');
