
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('2','9','1','收货人*','收货电话*','收货地址*','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('3','9','0','阿德萨','123455','阿方索第三方公司','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('4','9','1','得瑟得瑟','12234454','的士速递发送到','地方撒','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('5','9','1','撒旦的撒','5578787878875','虽有所提升虽然他还会使人体','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('6','9','1','撒打算','124216556','ewer委托人','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('7','9','1','的丰富的钙','123455','大夫撒旦法的方法等发达','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('8','9','1','asdad','22345356','的撒反对法风格广泛','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('9','9','0','11112','222222','3333333','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('10','9','1','1111','22222','33333','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('11','9','0','a111111','a222222','a33333333','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('12','9','1','a1111','a22222','a333333','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('13','10','1','111','222','333','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('15','10','0','a777b','a888b','a999b','','');
insert into `xsser_address`(`id`,`user_id`,`changyong`,`shouhuo_name`,`shouhuo_tel`,`shouhuo_address`,`bak1`,`bak`) values('16','10','0','85272','2752572','72727','2572752','');
CREATE TABLE `xsser_admin` (
  `id` bigint(20) NOT NULL auto_increment,
  `admin_user` varchar(50) NOT NULL COMMENT '用户名',
  `admin_pass` varchar(50) NOT NULL COMMENT '密码',
  `admin_uuid` varchar(100) NOT NULL COMMENT 'UUID标识',
  `login_ip` varchar(30) NOT NULL COMMENT '登录ip',
  `login_time` bigint(20) unsigned NOT NULL default '0' COMMENT '登录时间',
  `admin_rank` tinyint(4) unsigned NOT NULL default '1' COMMENT '管理员等级',
  `admin_power` varchar(300) NOT NULL COMMENT '保留字段，权限',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
insert into `xsser_admin`(`id`,`admin_user`,`admin_pass`,`admin_uuid`,`login_ip`,`login_time`,`admin_rank`,`admin_power`) values('5','wzq','f34a1acaad91e14200247aa2c68c6118','793d91e2-ef0d-0ab3-405f-b0aa0be6f094','11.85.63.53','1412847387','0','');
insert into `xsser_admin`(`id`,`admin_user`,`admin_pass`,`admin_uuid`,`login_ip`,`login_time`,`admin_rank`,`admin_power`) values('10','admin','32c3cc329676ac605e8f0b3c034682d7','5c228930-1496-c7f0-a124-82f2e1eda749','127.0.0.1','1415012574','1','');
insert into `xsser_admin`(`id`,`admin_user`,`admin_pass`,`admin_uuid`,`login_ip`,`login_time`,`admin_rank`,`admin_power`) values('11','qqq','c9f30890681bcdd57946fb55867d3f4b','2365ae30-2c65-acf5-8a2d-28699f6be97c','127.0.0.1','1415168196','1','');
insert into `xsser_admin`(`id`,`admin_user`,`admin_pass`,`admin_uuid`,`login_ip`,`login_time`,`admin_rank`,`admin_power`) values('12','abc','157607cfb26f1d5c6e1e12f5a2b30eeb','4b81b1a2-0f52-5e96-66cc-aa950b1ca5e9','127.0.0.1','1416822344','0','');
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
CREATE TABLE `xsser_ceshi` (
  `id` bigint(20) NOT NULL auto_increment,
  `text` varchar(500) default NULL,
  `area1` varchar(800) default NULL,
  `area2` text,
  `upload` varchar(500) default NULL,
  `pic` varchar(500) default NULL,
  `radio` tinyint(3) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('1','','','','','','0');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('2','1','2','<p>3</p>','4','5','1');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('3','2123','234324','<p>额外人其二</p>','温热万人','玩儿玩儿','0');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('4','','','','','','0');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('5','1','2','<p>3</p>','4','5','1');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('6','1-1','2-2','<p>3-3</p>','4-4','5-5','0');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('7','2123q1','q234324','<p>q额外人其二</p>','q温热万人','q玩儿玩儿','1');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('8','4-1','5-1','<p>6-1</p>','7-1','8-1','1');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('9','11111','','','','','1');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('10','11','','','','','1');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('11','2','','','','','1');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('12','普通文本输入框','普通小型描述框','<p><span style=\"color: rgb(126, 131, 139); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: right; background-color: rgb(249, 249, 249);\">富文本编辑器描述框</span></p>','/Uploads/2014_11_03/5456d7f99672a.txt','/Uploads/2014_11_03/5456d806eac4a.jpg','0');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('13','','','','','','1');
insert into `xsser_ceshi`(`id`,`text`,`area1`,`area2`,`upload`,`pic`,`radio`) values('14','','','','','','1');
CREATE TABLE `xsser_conf` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `conf` varchar(60) NOT NULL COMMENT '键',
  `value` longtext NOT NULL COMMENT '值',
  `bak1` longtext NOT NULL,
  `bak2` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('4','网站标题','  网站标题1','','');
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('5','网站关键词','  网站关键词1','','');
insert into `xsser_conf`(`id`,`conf`,`value`,`bak1`,`bak2`) values('6','网站描述','  网站描述1','','');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
insert into `xsser_coupon`(`id`,`name`,`price`,`description`,`ftime`,`gtime`,`bak1`,`bak2`) values('1','万圣节派对','123','万圣节派对倒萨范德萨奋斗','2014','2014','','');
insert into `xsser_coupon`(`id`,`name`,`price`,`description`,`ftime`,`gtime`,`bak1`,`bak2`) values('4','11111','1111','发射点发斯蒂芬斯蒂芬','2014','2014','','');
insert into `xsser_coupon`(`id`,`name`,`price`,`description`,`ftime`,`gtime`,`bak1`,`bak2`) values('5','asfasdsada','2','','1416585600','1416931200','','');
insert into `xsser_coupon`(`id`,`name`,`price`,`description`,`ftime`,`gtime`,`bak1`,`bak2`) values('6','店铺周年庆典','111','','1416672000','1417104000','','');
insert into `xsser_coupon`(`id`,`name`,`price`,`description`,`ftime`,`gtime`,`bak1`,`bak2`) values('8','老板娘过生日','63','','1416585600','1416931200','','');
insert into `xsser_coupon`(`id`,`name`,`price`,`description`,`ftime`,`gtime`,`bak1`,`bak2`) values('9','sdf','1','','1415894400','1416240000','','');
insert into `xsser_coupon`(`id`,`name`,`price`,`description`,`ftime`,`gtime`,`bak1`,`bak2`) values('10','光棍节促销','239','dsadgsfdsag9','1416844800','1417104000','','');
insert into `xsser_coupon`(`id`,`name`,`price`,`description`,`ftime`,`gtime`,`bak1`,`bak2`) values('11','测试','30','','1416758400','1416844800','','');
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('2','1416815439','8','5','6','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('4','1416817000','8','5','10','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('5','1416817231','8','5','8','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('6','1416817241','8','5','6','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('7','1416817294','8','5','8','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('8','1416817304','4','5','10','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('9','1416819142','10','5','11','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('10','1416819147','10','5','10','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('11','1416819151','10','5','8','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('12','1416819156','10','5','6','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('13','1416819168','7','5','11','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('14','1416819172','7','5','10','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('15','1416819176','7','5','8','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('16','1416819181','7','5','6','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('17','1416819193','2','5','6','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('18','1416819199','2','5','8','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('19','1416819211','2','5','11','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('20','1416819217','2','5','10','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('21','1416819234','2','5','10','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('22','1416819239','2','5','8','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('23','1416819243','2','5','6','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('24','1416819248','2','5','11','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('25','1416820565','9','5','8','0','','');
insert into `xsser_coupon_give`(`id`,`ftime`,`user_id`,`admin_id`,`coupon_id`,`is_use`,`bak1`,`bak2`) values('26','1416880893','2','5','8','0','','');
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('1','1','0','6.123.125.114','dsfsdfsdfsdfsdfsdfsdgfsfgfagfgf','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('2','1','1415156419','127.0.0.1','账号不存在或者被禁用! 帐号:wzq1','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('3','1','1415156449','127.0.0.1','账号密码错误! 帐号:wzq 密码:sadsadasdsad','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('4','1','1415156863','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('5','1','1415157144','127.0.0.1','账号不存在或者被禁用! 帐号:wzq3','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('6','1','1415157160','127.0.0.1','账号密码错误! 帐号:wzq 密码:safdsffg1`121214423152','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('7','1','1415157179','127.0.0.1','账号密码错误! 帐号:wzq 密码:safdsffg1`121214423152xzcxczcxzxzcxzc','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('8','1','1415157205','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('9','1','1415168834','127.0.0.1','账号密码错误! 帐号:admin 密码:admin','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('10','1','1415168846','127.0.0.1','账号密码错误! 帐号:admin 密码:123456','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('11','1','1415168863','127.0.0.1','登录成功! 帐号:admin','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('12','1','1415168933','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('13','1','1415235686','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('14','1','1415265415','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('15','1','1415322558','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('16','1','1415411301','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('17','1','1416362240','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('18','1','1416639872','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('19','1','1416640253','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('20','1','1416640281','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('21','1','1416640320','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('22','1','1416793578','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('23','1','1416822375','127.0.0.1','登录成功! 帐号:abc','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('24','1','1416880849','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('25','1','1417743123','127.0.0.1','登录成功! 帐号:wzq','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('26','1','1439003256','127.0.0.1','账号密码错误! 帐号:admin 密码:zhengbang808809','','','');
insert into `xsser_info`(`id`,`type_id`,`time`,`ip`,`info1`,`info2`,`info3`,`info4`) values('27','1','1439003267','127.0.0.1','登录成功! 帐号:wzq','','','');
CREATE TABLE `xsser_jifen` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` int(20) NOT NULL COMMENT '操作时间',
  `user_id` bigint(20) NOT NULL COMMENT '用户id',
  `admin_id` int(11) NOT NULL,
  `jilu` varchar(255) NOT NULL COMMENT '记录描述',
  `bak1` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('1','0','9','5','管理员(wzq)给账户(lisi521)的积分执行了(增加11)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('2','0','9','5','管理员(wzq)给账户(lisi521)的积分执行了(增加57)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('3','0','6','5','管理员(wzq)给账户(3534a55()的积分执行了(增加23)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('4','0','9','5','管理员(wzq)给账户(lisi521)的积分执行了(删除8)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('5','0','8','5','管理员(wzq)给账户(a密码123456)的积分执行了(增加30分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('6','0','10','5','管理员(wzq)给账户(用户名123)的积分执行了(删除21分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('7','0','3','5','管理员(wzq)给账户(89&amp;23456)的积分执行了(增加96分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('8','0','3','5','管理员(wzq)给账户(89&amp;23456)的积分执行了(删除6分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('9','0','10','5','管理员(wzq)给账户(用户名123)的积分执行了(增加1分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('10','0','10','5','管理员(wzq)给账户(用户名123)的积分执行了(增加1分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('11','0','10','5','管理员(wzq)给账户(用户名123)的积分执行了(删除1分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('12','0','10','5','管理员(wzq)给账户(用户名123)的积分执行了(删除5分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('13','0','6','5','管理员(wzq)给账户(3534a55()的积分执行了(删除3分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('14','0','9','5','管理员(wzq)给账户(lisi521)的积分执行了(增加10分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('15','0','9','5','管理员(wzq)给账户(lisi521)的积分执行了(删除20分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('16','0','9','5','管理员(wzq)给账户(lisi521)的积分执行了(增加10分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('17','0','9','5','管理员(wzq)给账户(lisi521)的积分执行了(删除5分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('18','1416822400','10','12','执行了(删除5分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('19','1416822416','10','12','执行了(增加9999分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('20','1416822467','4','12','执行了(增加66分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('21','1416822536','7','12','执行了(增加3分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('22','1416822543','5','12','执行了(增加5959分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('23','1416822550','1','12','执行了(增加9分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('24','1416822558','2','12','执行了(增加59254分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('25','1416822573','10','12','执行了(删除9000分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('26','1416822584','10','12','执行了(删除980分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('27','1416822592','10','12','执行了(增加1分)操作','');
insert into `xsser_jifen`(`id`,`time`,`user_id`,`admin_id`,`jilu`,`bak1`) values('28','1417743165','10','5','执行了(删除10分)操作','');
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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('20','0','','默认','默认','text','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('22','0','','test','文件验证','upload','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('41','0','','全功能测试','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('42','0','','招聘人才','姓名|个人信息|上传简历','text|area1|upload','','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('48','1','ceshi','高级创建','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','text|area1|area2|upload|pic|radio','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('49','1','ceshi','呵呵','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','text|area1|area2|upload|pic|radio','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('50','1','ceshi','sds','sdd','sdsd','asdsadasd','1','500');
insert into `xsser_modual`(`id`,`modual_type`,`database_table`,`modual_name`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`) values('51','1','ceshi','dfsff','dsfsfsdf','sdfsdfd','ddsfsdfsadf','1','500');
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
  PRIMARY KEY  (`id`),
  KEY `news_title` (`news_title`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('19','9','0','单页二级1标题*','&lt;p&gt;&lt;img src=&quot;/Uploads/ue_upload/image/20141009/1412854181228886.jpg&quot; style=&quot;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Uploads/ue_upload/image/20141009/1412854116885077.jpg&quot; style=&quot;width: 30px; height: 20px;&quot; width=&quot;30&quot; height=&quot;20&quot; border=&quot;0&quot; vspace=&quot;0&quot; title=&quot;&quot; alt=&quot;&quot;/&gt;&lt;/p&gt;&lt;p&gt;默认内容&lt;span style=&quot;color: rgb(126, 131, 139); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: right; background-color: rgb(249, 249, 249);&quot;&gt;内容&lt;/span&gt;&lt;br/&gt;&lt;/p&gt;','0','11111发布人','1413589633','1412999073','0','0','0','300','title(标题)','keyword(关键词)','description(描述)','','','/Uploads/5438a366d0ea7.jpg','补充信息');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('22','16','0','test11114','&lt;p&gt;默认内容&lt;/p&gt;','1','','1412524800','1413524494','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('23','1','0','新闻中心','默认内容','1','','1413000673','1413000673','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('24','3','6','公司新闻','默认内容','1','6','1413000774','1413000774','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('25','11','5','单页三级1','&lt;p&gt;默认内容849845&lt;/p&gt;','0','11111发布人','1413388800','1414759787','0','0','0','300','title(标题)','keyword(关键词)','description(描述','','','/Uploads/543b73d116102.jpg','补充信息');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('26','6','0','通信业务','默认内容','1','','1413182717','1413182717','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('27','2','0','行业新闻','默认内容','1','','1413184423','1413184423','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('28','0','0','标题','&lt;p&gt;&lt;span style=&quot;color: rgb(126, 131, 139); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: right; background-color: rgb(249, 249, 249);&quot;&gt;内容&lt;/span&gt;&lt;/p&gt;','0','发布人','1413343627','1413187947','0','300','0','203','title(标题)','keyword(关键词','description(描述)','','','/Uploads/543b895dbe256.jpg','补充信息');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('34','3','6','13123','','1','','1413180912','1413191592','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('37','3','0','ASDASDS111','','1','','53425','1413192865','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('38','3','0','RGRGFG5665','','1','','1413192998','1413192998','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('39','3','0','trjhwt','','0','','1413193364','1413193364','0','0','0','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('40','3','0','标题*修改','&lt;p&gt;&lt;span style=&quot;color: rgb(126, 131, 139); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: right; background-color: rgb(249, 249, 249);&quot;&gt;内容*修改&lt;img src=&quot;http://sh.sinaimg.cn/citylink/jk/t_mr/2010-05-13/U4818P18T320D107F9454DT20100513153341.jpg&quot; alt=&quot;U4818P18T320D107F9454DT20100513153341.jpg&quot;/&gt;&lt;/span&gt;&lt;/p&gt;','1','发布人修改','1416684612','1413197652','0','364','1','300','title(标题)修改','keyword(关键词)修改','description(描述)修改','','','类型图片修改','补充信息修改');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('41','3','0','额外太热','','0','','1413315039','1413197679','0','0','0','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('43','3','0','111111111111111','','1','','1413199828','1413199828','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('45','3','0','公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻公司新闻','','1','','1413199932','1413199932','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('46','17','0','新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地新闻天地','','1','','1413200248','1413200248','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('47','8','0','单页顶级','默认内容','1','','1413246974','1413246974','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('48','19','0','sdfsdfsd2','默认内容','1','','1413246982','1413246982','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('49','7','0','495626','&lt;p&gt;95+6565+&lt;/p&gt;','1','','1413339505','1413339505','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('50','7','0','74545445','&lt;p&gt;7/78&lt;/p&gt;','1','','0','1413524334','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('52','7','0','123142141','','1','','1451836800','1413524946','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('53','7','0','sad非官方','','1','','1413524652','1413524652','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('54','7','5','efsdfdsf','','1','wzq','1414759853','1414759853','0','0','1','500','','','','','','','');
insert into `xsser_news`(`id`,`type_id`,`user_id`,`news_title`,`news_content`,`news_reco`,`news_user`,`news_time`,`news_modify_time`,`news_view_time`,`view_count`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('55','24','10','ewqrewrew','&lt;p&gt;ewrsdfsdf&lt;/p&gt;','0','admin','1415063531','1415063531','0','0','0','500','','','','','','','');
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('1','新闻中心','1','1','0','1','500','1','新闻中心title(标题)','新闻中心keyword(关键词)','新闻中心description(描述)','','','/Uploads/5435f908667f6.jpg','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('2','行业新闻','1','2','1','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('3','公司新闻','1','2','1','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('4','公司活动','1','3','3','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('5','公司业务','1','3','3','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('6','通信业务','1','4','5','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('7','互联网业务','1','4','5','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('8','单页顶级','0','1','0','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('9','单页二级1','0','2','8','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('10','单页二级2','0','2','8','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('11','单页三级1','0','3','9','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('16','test11114','0','3','10','1','432','1','title(标题)','keyword(关键词)','description(描述)','','','/Uploads/543624ced9310.png','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('17','新闻天地','1','3','3','1','600','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('18','assadsadsa1','0','1','0','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('19','sdfsdfsd2','0','2','18','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('20','测试顶级','1','1','0','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('21','1111','0','2','8','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('22','多数发达省份','0','1','0','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('23','sadadsad','1','5','7','1','500','1','','','','','','','');
insert into `xsser_news_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('24','sdasdsadasd','1','6','23','1','500','1','','','','','','','');
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
  PRIMARY KEY  (`id`),
  KEY `product_title` (`product_title`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('1','76','0','$param_arraydwffdfdwf','/Uploads/2014_10_15/543e11403ecbf.jpg','/Uploads/2014_10_15/543e114fd40e4.jpg','&lt;p&gt;&lt;span style=&quot;color: rgb(126, 131, 139); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: right; background-color: rgb(249, 249, 249);&quot;&gt;内容*&lt;/span&gt;&lt;/p&gt;','0','发布人','0','0','0','630','普通文本输入框','0','0','500','title(标题)','keyword(关键词)','description(描述)','','','','补充信息');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('2','76','0','asdfaFG','','','','1','','1413354501','1413354501','0','0','普通文本输入框','0','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('3','76','0','AGG','','','','1','','1413354697','1413354697','0','0','普通文本输入框|普通小型描述框|||||1||','0','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('4','76','0','标题*&lt;script&gt;alert(\'xss\');&lt;/script&gt;','缩略图','大图','&lt;p&gt;&lt;span style=&quot;color: rgb(126, 131, 139); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: right; background-color: rgb(249, 249, 249);&quot;&gt;内容*&lt;/span&gt;&lt;/p&gt;','1','发布人','1413354870','1413354870','0','635','普通文本输入框|普通小型描述框|<p><span style=\"color: rgb(126, 131, 139); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: right; background-color: rgb(249, 249, 249);\">富文本编辑器描述框</span></p>|上传图片，文件|上传图片|选择框|1|复选框|时间','0','1','500','title(标题)','keyword(关键词)','description(描述)','','','','补充信息');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('5','76','0','sadfadf','','','','1','','1413355065','1413355065','0','0','1|2|<p>3</p>|4|5|6|1|7|8','0','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('7','76','0','231231','','','','1','','1413361592','1413361592','0','0','||||||1||','0','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('8','76','0','8643513','','','','1','','1413362773','1413362773','0','0','||||||1||','0','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('9','76','0','asdsadasd','','','','1','','1413302400','1413446335','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('10','76','0','fsagfdgfsfggdf','','','','1','','1413302400','1413446322','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('12','76','0','第三个发','','','','1','','1413302400','1413446456','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('13','76','0','新增词','','','','1','','1413364740','1413364740','0','0','||||||1||','75','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('14','76','0','萨芬萨芬','','','','1','','1413302400','1413446479','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('15','76','0','湿答答','','','','1','','1413365038','1413365038','0','0','||||||1||','74','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('16','76','0','wertgtsfgds','','','','1','','1413302400','1413446447','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('18','76','0','esfsd','','','','1','','1413365702','1413365702','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('19','76','0','sdafafdsaf','','','','1','','1413365726','1413365726','0','0','||||||1||','75','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('20','76','0','safggbaaaa','','','','1','','1413365736','1413365736','0','0','||||||1||','74','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('21','76','0','dsg3ertfs','','','','1','','1413365746','1413365746','0','0','||||||1||','74','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('22','76','0','sdfdf','','','','1','','1413302400','1413446364','0','0','||||||1||','74','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('23','76','0','修改标题*&lt;script&gt;alert(\'1111xss\');&lt;/script&gt;','修改缩略图','修改大图','&lt;p&gt;修改内容*&lt;/p&gt;','1','修改发布人','1414684800','1413446467','0','300','修改普通文本输入框|修改普通小型描述框|<p>修改富文本编辑器描述框</p>|修改上传图片，文件|修改上传图片|修改选择框|1|修改复选框|修改时间','','1','500','title(标题)','keyword(关键词)','description(描述)','','','','补充信息');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('24','76','0','adfad111','','','','1','','1414190953','1413428993','0','0','||||||1||','75','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('25','76','0','4324234','','','','1','','1414536701','1413429061','0','0','||||||1||','74','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('26','76','0','aDFEHDG1','','','','1','','1413932353','1413429353','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('28','76','0','67565356','','','','1','','1413501445','1413430005','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('29','76','0','325gdfsag','','','','1','','1413760745','1413430065','0','0','||||||1||','74','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('30','76','0','sgqtjuyejkzhgtw','','','','1','','1413675205','1413430565','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('31','76','0','rqhra34245321','','','','1','','1414425600','1413449999','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('33','0','0','阿萨德sad','','','','1','','1413820800','1413441081','0','0','','75','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('34','0','0','hrmktg ','','','','1','','1413993600','1413441049','0','0','','75|76','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('35','0','0','asdasdsad11111','','','','1','','1413561600','1413441621','0','0','','74|75|76','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('36','86','0','三大发电方式','','','','1','','0','1413459335','0','0','||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('37','86','0','犬瘟热提高人体','','','','1','','0','1413459463','0','0','||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('40','86','0','修改标题*','','','','1','','1413460110','1413460110','0','23','修改姓名|修改个人信息|修改上传简历','','1','50','修改title(标题)','修改keyword(关键词)','修改description(描述)','','','','修改补充信息');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('41','86','0','多少东西根深蒂固','','','','0','','1413459855','1413459855','0','0','大声的说法|斯蒂芬斯蒂芬分|第三方的手','','0','500','斯蒂芬','的事发生大幅','但是斯蒂芬分','','','','时代复分第三方');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('42','76','0','11111','','','','1','','1413216000','1413513745','0','0','||||||1||','77','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('43','85','0','山东分公司fag','','','','1','','1413525095','1413525095','0','0','|||||1','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('44','76','0','894854','','','','1','','1413475200','1413524977','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('45','76','0','5959556+9','','','','1','','1413648000','1413525012','0','0','||||||1||','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('46','86','0','64598743214','','','','0','','1413525069','1413525069','0','0','||','','0','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('47','62','5','dfsdffs','','','&lt;p&gt;sdsffdsdfsdfsfsdsdf&lt;/p&gt;','0','','1414598400','1414983606','0','0','/Uploads/2014_10_30/5451e47777d84.jpg','64','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('48','85','0','而为热舞','','','','1','','1414728188','1414728188','0','0','|||||1','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('50','105','5','王清任喂不能','','','','1','','1414684800','1414977482','0','0','7','104','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('51','104','0','1-1','2-1','3-1','&lt;p&gt;9-1&lt;/p&gt;','1','10-1','1417968000','1414745952','0','11111','8','105','1','300','12-1','13-1','14-1','','','','15-1');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('52','104','5','dggfdag','/Uploads/2014_10_31/54534fc91cb70.jpg','','','1','','1414684800','1414976562','0','0','9','105','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('53','64','5','rsgtfsdgfd','/Uploads/2014_11_03/54575bbe63aa4.jpg','','','1','wzq','1414684800','1415011319','0','0','','57|59|60','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('54','104','5','rtgffd','','','','1','wzq','1414684800','1415148902','0','0','10','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('55','105','5','111112333','','','','1','wzq','1414944000','1414976637','0','0','11','104','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('56','105','5','gfhgghdghsd','/Uploads/2014_11_03/5456d7dc0cc97.jpg','/Uploads/2014_11_03/5456d7dfe12c7.jpg','&lt;p&gt;sasadasd&lt;/p&gt;','0','wzq','1417017600','1414977760','0','1003','12','104','0','500','title(标题)','keyword(关键词)','description(描述)','','','','补充信息');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('57','62','5','trgedyste长袖衬衫1','','','','1','wzq','1414944000','1415101823','0','0','','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('58','85','5','短发发达','','','','1','','1414984375','1414984375','0','0','|||||1','','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('59','104','5','fsdgfdgfdg','','','','1','admin','1415030400','1415322594','0','0','13','105','1','500','','','','','','','');
insert into `xsser_product`(`id`,`type_id`,`user_id`,`product_title`,`product_pic_s`,`product_pic_b`,`product_content`,`product_reco`,`product_user`,`product_time`,`product_modify_time`,`product_view_time`,`view_count`,`param`,`tuijian_id_group`,`active`,`show_level`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('60','105','5','sdfgdfgdsfg','/Uploads/2014_11_22/5470379e0e27b.jpg','','','1','wzq','1416585600','1416640420','0','0','14','104','1','500','','','','','','','');
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
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8;
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('53','产品中心','1','1','0','22','','文件验证','upload','','1','500','1','产品中心','产品中心','产品中心','','','/Uploads/5435dae7be287.png','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('54','衣服','1','2','53','22','','文件验证','upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('55','裤子','1','2','53','22','','文件验证','upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('56','鞋子','1','2','53','22','','文件验证','upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('57','牛仔裤','1','3','55','22','','文件验证','upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('58','休闲裤','1','3','55','22','','文件验证','upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('59','滑板鞋','1','3','56','22','','文件验证','upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('60','T恤','1','3','54','22','','文件验证','upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('61','衬衫','1','3','54','22','','文件验证','upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('62','长袖衬衫','1','4','61','22','','文件验证','upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('64','短袖衬衫','1','4','61','22','','文件验证','upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('65','研发中心','2','1','0','32','','默认','text','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('66','技术部','2','2','65','32','','默认','text','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('67','信息部','2','2','65','32','','默认','text','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('68','工程部','2','2','65','32','','默认','text','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('69','采购队','2','3','68','32','','默认','text','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('70','施工队','2','3','68','32','','默认','text','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('71','公司荣誉','3','1','0','32','','rrrrr|sdasd','rrr|ssss','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('72','物联网荣誉','3','2','71','32','','rrrrr|sdasd','rrr|ssss','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('73','资质证书','3','2','71','31','','rrrrr|sdasd','rrr|ssss','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('74','全功能测试11','4','1','0','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|选择框|单选框|复选框|时间','text|area1|area2|upload|pic|selects|radio|checkbox|time','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('75','全功能测试22','4','2','74','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|选择框|单选框|复选框|时间','text|area1|area2|upload|pic|selects|radio|checkbox|time','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('76','全功能测试333','4','3','75','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|选择框|单选框|复选框|时间','text|area1|area2|upload|pic|selects|radio|checkbox|time','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('77','似懂非懂发','4','3','75','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|选择框|单选框|复选框|时间','text|area1|area2|upload|pic|selects|radio|checkbox|time','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('78','测试顶级','120','1','0','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('79','95654','100','1','0','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('80','4954541可能明年将','101','1','0','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('81','11111111111','120','2','78','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('82','2222222222','120','2','78','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('83','发生大幅度1','120','3','81','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('84','dry梵蒂冈2','120','3','81','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('85','大概vga不01','120','4','83','41','','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('86','个人招聘','106','1','0','42','','姓名|个人信息|上传简历','text|area1|upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('89','ADSFSADF','123','1','0','42','','姓名|个人信息|上传简历','text|area1|upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('90','打发打发','134','1','0','42','','姓名|个人信息|上传简历','text|area1|upload','','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('101','vcfgsdrgfg','6','1','0','48','ceshi','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','text|area1|area2|upload|pic|radio','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('102','挖掘机','7','1','0','48','ceshi','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','text|area1|area2|upload|pic|radio','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('103','国产挖掘机','7','2','102','48','ceshi','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','text|area1|area2|upload|pic|radio','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('104','10-20吨挖掘机','7','3','103','48','ceshi','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','text|area1|area2|upload|pic|radio','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('105','21-50吨挖掘机','7','3','103','48','ceshi','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','text|area1|area2|upload|pic|radio','1','500','1','','','','','','','');
insert into `xsser_product_type`(`id`,`type_name`,`type_type`,`type_rank`,`type_parent`,`modual_id`,`database_table`,`shuxing_name`,`shuxing_type`,`table_field`,`active`,`show_level`,`isshow`,`title`,`keyword`,`description`,`php_page`,`html_page`,`bak1`,`bak2`) values('106','国外挖掘机','7','2','102','48','ceshi','普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框','text|area1|area2|upload|pic|radio','text|area1|area2|upload|pic|radio','1','500','1','','','','','','','');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('1','','0','张三','zhangsan','123456','1','54651215@qq.com','9','0','','0','123.123.123.123','','');
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('2','2515a67a-4ac9-d0fd-bb03-571a496390c7','1','assaf222','a1ddsffdsfsdf111','bf9f0389874228ed29464da2b69d0619','1','errwerwer@qq.com','59254','0','','1415203200','127.0.0.1','','');
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('3','16872cb2-07f6-e568-738b-cdc01cb43474','0','1111123','89&amp;23456','07c130827ca21a1aafe10ebab4d85c78','1','sdf@viq.qq.com','90','0','','1415721600','127.0.0.1','','');
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('4','c79fa6d4-71c8-de67-c4b4-c2293b84ef5e','1','xcvcxv','-0098552','b704cabf2a8fdbbea00a3f18c8d038cf','1','xcvxc','66','0','','1415203200','127.0.0.1','','');
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('5','60e965ca-16e4-936c-15e0-40efcb9a3414','0','sdfsfdsfsfd','dfsfdsf789','69a3bd7479eb270624c132b067c863db','1','shs@qq','5959','0','','1415289600','127.0.0.1','','');
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('6','0c9b3435-1d57-6ea9-4187-b34c19de32a5','1','','3534a55(','ecdb04f5ed023b3165cb946f0a7e0cb2','1','sdfsd@','20','0','','1415203200','127.0.0.1','','');
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('7','056a4ecf-4c78-1088-eda6-554d9713963b','1','','让我太感人预告','61e8a6c1e98c3c3b0cff740d3369a07e','1','sd11@viq.qq.com','3','0','','1415203200','127.0.0.1','','');
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('8','742ec5c8-2756-1173-baf3-30bf635c072d','0','anicheng123456','a密码123456','7db242e1377c306474a42532cf1d883f','1','a123456@qq.com','30','0','/Uploads/2014_11_06/a545b2df410469.png','1405526400','127.0.0.1','dsfsdfsdfads','');
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('9','1ed14a3d-79e6-0049-15e2-4a3815341d73','1','李四','lisi521','2647bcfda09ffb722c9166ce7fd922b2','1','gfghfasg','55','0','sadsagffh','1416153600','127.0.0.1','7asDDFGDF','');
insert into `xsser_user`(`id`,`uuid`,`state`,`nname`,`username`,`password`,`sex`,`email`,`jifen`,`address_id`,`face`,`regtime`,`regip`,`bak1`,`bak2`) values('10','b14186be-0451-0b87-5187-42b87248a3f3','1','显示名(昵称)','用户名123','d700392efeff4671100459b291dbfe90','1','66756765@qq.com','10','0','/Uploads/2014_11_07/545c650a6c8ec.jpg','1415721600','127.0.0.1','','');
