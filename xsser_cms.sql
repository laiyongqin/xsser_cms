/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : xsser_cms

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2015-08-09 16:41:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `xsser_address`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_address`;
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

-- ----------------------------
-- Records of xsser_address
-- ----------------------------

-- ----------------------------
-- Table structure for `xsser_admin`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_admin`;
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

-- ----------------------------
-- Records of xsser_admin
-- ----------------------------
INSERT INTO `xsser_admin` VALUES ('5', 'wzq', 'f34a1acaad91e14200247aa2c68c6118', '793d91e2-ef0d-0ab3-405f-b0aa0be6f094', '11.85.63.53', '1412847387', '0', '');

-- ----------------------------
-- Table structure for `xsser_basket`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_basket`;
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

-- ----------------------------
-- Records of xsser_basket
-- ----------------------------

-- ----------------------------
-- Table structure for `xsser_conf`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_conf`;
CREATE TABLE `xsser_conf` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `conf` varchar(60) NOT NULL COMMENT '键',
  `value` longtext NOT NULL COMMENT '值',
  `bak1` longtext NOT NULL,
  `bak2` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsser_conf
-- ----------------------------
INSERT INTO `xsser_conf` VALUES ('4', '网站标题', 'XSSER_CMS系统欢迎您的使用!', '', '');
INSERT INTO `xsser_conf` VALUES ('5', '网站关键词', 'XSSER_CMS系统欢迎您的使用!', '', '');
INSERT INTO `xsser_conf` VALUES ('6', '网站描述', 'XSSER_CMS系统欢迎您的使用!', '', '');
INSERT INTO `xsser_conf` VALUES ('7', '发件邮箱地址', '971811662@qq.com', '', '');
INSERT INTO `xsser_conf` VALUES ('8', '邮箱SMTP服务器', 'smtp.qq.com', '', '');
INSERT INTO `xsser_conf` VALUES ('9', '邮箱登录帐号', '971811662@qq.com', '', '');
INSERT INTO `xsser_conf` VALUES ('10', '邮箱密码', '123456789', '', '');
INSERT INTO `xsser_conf` VALUES ('11', '邮箱收件箱', '969333313@qq.com', '', '');

-- ----------------------------
-- Table structure for `xsser_coupon`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_coupon`;
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

-- ----------------------------
-- Records of xsser_coupon
-- ----------------------------

-- ----------------------------
-- Table structure for `xsser_coupon_give`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_coupon_give`;
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

-- ----------------------------
-- Records of xsser_coupon_give
-- ----------------------------

-- ----------------------------
-- Table structure for `xsser_goumai`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_goumai`;
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

-- ----------------------------
-- Records of xsser_goumai
-- ----------------------------

-- ----------------------------
-- Table structure for `xsser_info`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_info`;
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsser_info
-- ----------------------------

-- ----------------------------
-- Table structure for `xsser_jifen`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_jifen`;
CREATE TABLE `xsser_jifen` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` int(20) NOT NULL COMMENT '操作时间',
  `user_id` bigint(20) NOT NULL COMMENT '用户id',
  `admin_id` int(11) NOT NULL,
  `jilu` varchar(255) NOT NULL COMMENT '记录描述',
  `bak1` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsser_jifen
-- ----------------------------

-- ----------------------------
-- Table structure for `xsser_modual`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_modual`;
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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsser_modual
-- ----------------------------
INSERT INTO `xsser_modual` VALUES ('41', '0', '', '全功能测试', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框', 'text|area1|area2|upload|pic|radio', '', '1', '500');
INSERT INTO `xsser_modual` VALUES ('42', '0', '', '招聘人才', '姓名|个人简单介绍|工作经历|上传简历', 'text|area1|area2|upload', '', '1', '500');
INSERT INTO `xsser_modual` VALUES ('54', '0', 'new_modual_', '默认', '描述', 'area1', '', '1', '500');
INSERT INTO `xsser_modual` VALUES ('55', '0', 'new_modual_', '友情链接', '图片|链接地址', 'upload|text', '', '1', '500');
INSERT INTO `xsser_modual` VALUES ('56', '1', 'new_modual_ceshi', '高级全功能测试', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框', 'text|area1|area2|upload|pic|radio', 'text|area1|area2|upload|pic|radio', '1', '500');

-- ----------------------------
-- Table structure for `xsser_news`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_news`;
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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsser_news
-- ----------------------------
INSERT INTO `xsser_news` VALUES ('57', '25', '5', '公司简介', '&lt;p&gt;我们的公司简介&lt;/p&gt;', '1', '', '1439049600', '1439104119', '0', '0', '1', '500', '', '', '', '', '', '', '');
INSERT INTO `xsser_news` VALUES ('58', '30', '5', '我们的团队', '&lt;p&gt;我们的团队介绍&lt;/p&gt;', '1', '', '1439049600', '1439104144', '0', '0', '1', '500', '', '', '', '', '', '', '');
INSERT INTO `xsser_news` VALUES ('59', '26', '5', '联系我们', '&lt;p&gt;联系我们的内容&lt;/p&gt;', '1', '', '1439049600', '1439104160', '0', '0', '1', '500', '', '', '', '', '', '', '');
INSERT INTO `xsser_news` VALUES ('60', '28', '5', '行业新闻的一条数据', '&lt;p&gt;行业新闻的一条数据内容&lt;/p&gt;', '1', 'wzq', '1439104305', '1439104305', '0', '0', '1', '500', '', '', '', '', '', '', '');
INSERT INTO `xsser_news` VALUES ('61', '29', '5', '公司新闻的一条数据', '&lt;p&gt;公司新闻的一条数据&lt;/p&gt;', '1', 'wzq', '1439104336', '1439104336', '0', '0', '1', '500', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `xsser_news_type`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_news_type`;
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsser_news_type
-- ----------------------------
INSERT INTO `xsser_news_type` VALUES ('25', '公司简介', '0', '1', '0', '1', '100', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_news_type` VALUES ('26', '联系我们', '0', '1', '0', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_news_type` VALUES ('27', '新闻中心', '1', '1', '0', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_news_type` VALUES ('28', '行业新闻', '1', '2', '27', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_news_type` VALUES ('29', '公司新闻', '1', '2', '27', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_news_type` VALUES ('30', '我们的团队', '0', '1', '0', '1', '200', '1', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `xsser_new_modual_ceshi`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_new_modual_ceshi`;
CREATE TABLE `xsser_new_modual_ceshi` (
  `id` bigint(20) NOT NULL auto_increment,
  `text` varchar(500) default NULL,
  `area1` varchar(800) default NULL,
  `area2` text,
  `upload` varchar(500) default NULL,
  `pic` varchar(500) default NULL,
  `radio` tinyint(3) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsser_new_modual_ceshi
-- ----------------------------
INSERT INTO `xsser_new_modual_ceshi` VALUES ('1', '普通文本输入框', '普通小型描述框', '<p><span style=\"color: rgb(126, 131, 139); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: right; background-color: rgb(249, 249, 249);\">富文本编辑器描述框</span></p>', '上传图片，文件', '上传图片', '0');

-- ----------------------------
-- Table structure for `xsser_order`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_order`;
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

-- ----------------------------
-- Records of xsser_order
-- ----------------------------

-- ----------------------------
-- Table structure for `xsser_product`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_product`;
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
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsser_product
-- ----------------------------
INSERT INTO `xsser_product` VALUES ('61', '107', '5', '客服人员', '/Uploads/2015_08_09/55c6fdca80ae8.jpg', '/Uploads/2015_08_09/55c6fdd4d862f.jpg', '', '1', 'wzq', '1439049600', '1439104586', '0', '0', '姓名|个人简单介绍|<p>工作经历</p>|/Uploads/2015_08_09/55c6fe41ca0aa.zip', '', '1', '500', '', '', '', '', '', '', '');
INSERT INTO `xsser_product` VALUES ('62', '124', '5', '百度', '', '', '', '1', '', '1439104868', '1439104868', '0', '0', '/Uploads/2015_08_09/55c6ff469f0dd.jpg|https://www.baidu.com', '', '1', '500', '', '', '', '', '', '', '');
INSERT INTO `xsser_product` VALUES ('63', '111', '5', '新款牛仔裤', '/Uploads/2015_08_09/55c700166798d.jpg', '/Uploads/2015_08_09/55c7001fb08a8.jpg', '&lt;p&gt;内容&lt;/p&gt;', '1', 'wzq', '1439049600', '1439105182', '0', '0', '普通文本输入框|普通小型描述框|<p><span style=\"color: rgb(126, 131, 139); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: right; background-color: rgb(249, 249, 249);\">富文本编辑器描述框</span></p>|/Uploads/2015_08_09/55c70037da379.zip|/Uploads/2015_08_09/55c70047885a4.jpg|1', '112', '1', '500', '', '', '', '', '', '', '');
INSERT INTO `xsser_product` VALUES ('64', '120', '5', '牛排', '/Uploads/2015_08_09/55c701ee3b2da.jpg', '', '&lt;p&gt;49876546&lt;/p&gt;', '1', 'wzq', '1439049600', '1439105549', '0', '0', '1', '', '1', '500', '', '', '', '', '', '', '');
INSERT INTO `xsser_product` VALUES ('65', '121', '5', '甜点甜点', '', '', '', '1', 'wzq', '1439049600', '1439105668', '0', '0', '2', '', '1', '500', '', '', '', '', '', '', '');
INSERT INTO `xsser_product` VALUES ('66', '123', '5', '花式面点', '', '', '', '1', 'wzq', '1439049600', '1439105808', '0', '0', '4', '', '1', '500', '', '', '', '', '', '', '');
INSERT INTO `xsser_product` VALUES ('67', '125', '5', '标题*', '缩略图', '大图', '&lt;p&gt;&lt;span style=&quot;color: rgb(126, 131, 139); font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: right; background-color: rgb(249, 249, 249);&quot;&gt;内容*&lt;/span&gt;&lt;/p&gt;', '1', 'wzq', '1439049600', '1439106296', '0', '0', '1', '', '1', '500', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `xsser_product_type`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_product_type`;
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
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsser_product_type
-- ----------------------------
INSERT INTO `xsser_product_type` VALUES ('107', '人才招聘', '1', '1', '0', '42', '', '姓名|个人简单介绍|工作经历|上传简历', 'text|area1|area2|upload', '', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_product_type` VALUES ('108', '产品中心', '2', '1', '0', '41', '', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框', 'text|area1|area2|upload|pic|radio', '', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_product_type` VALUES ('109', '衬衫', '2', '2', '108', '41', '', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框', 'text|area1|area2|upload|pic|radio', '', '1', '20', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_product_type` VALUES ('110', '裤子', '2', '2', '108', '41', '', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框', 'text|area1|area2|upload|pic|radio', '', '1', '10', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_product_type` VALUES ('111', '牛仔裤', '2', '3', '110', '41', '', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框', 'text|area1|area2|upload|pic|radio', '', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_product_type` VALUES ('112', '卡其裤', '2', '3', '110', '41', '', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框', 'text|area1|area2|upload|pic|radio', '', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_product_type` VALUES ('113', '长袖衬衫', '2', '3', '109', '41', '', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框', 'text|area1|area2|upload|pic|radio', '', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_product_type` VALUES ('114', '短袖衬衫', '2', '3', '109', '41', '', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框', 'text|area1|area2|upload|pic|radio', '', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_product_type` VALUES ('116', '设备展示', '3', '1', '0', '54', '', '描述', 'area1', '', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_product_type` VALUES ('124', '友情链接', '101', '1', '0', '55', '', '图片|链接地址', 'upload|text', '', '1', '500', '1', '', '', '', '', '', '', '');
INSERT INTO `xsser_product_type` VALUES ('125', '高级产品中心', '8', '1', '0', '56', 'new_modual_ceshi', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框', 'text|area1|area2|upload|pic|radio', 'text|area1|area2|upload|pic|radio', '1', '500', '1', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `xsser_reply`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_reply`;
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

-- ----------------------------
-- Records of xsser_reply
-- ----------------------------
INSERT INTO `xsser_reply` VALUES ('1', '5', '1', '0', 0x31313131313131313131313131313131, '127.0.0.1', '1439107600', '');

-- ----------------------------
-- Table structure for `xsser_replyposts`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_replyposts`;
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

-- ----------------------------
-- Records of xsser_replyposts
-- ----------------------------
INSERT INTO `xsser_replyposts` VALUES ('1', '5', '60', '0', '1', 0xE588ABE58786E5A487E58786E5A487E59083E9A5ADE697A9E9A5AD7644465376, '代收代付', '水电费', '佛挡杀佛', '', '0', '');

-- ----------------------------
-- Table structure for `xsser_user`
-- ----------------------------
DROP TABLE IF EXISTS `xsser_user`;
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

-- ----------------------------
-- Records of xsser_user
-- ----------------------------
