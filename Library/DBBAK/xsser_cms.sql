--
-- 数据库: `xsser_cms`
--

-- --------------------------------------------------------

--
-- 表的结构 `xsser_address`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `xsser_address`
--

INSERT INTO `xsser_address` (`id`, `user_id`, `changyong`, `shouhuo_name`, `shouhuo_tel`, `shouhuo_address`, `bak1`, `bak`) VALUES
(1, 1, 1, '王晓明', '15098612360', '山东省烟台市芝罘区只楚某某西街12号', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_admin`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `xsser_admin`
--

INSERT INTO `xsser_admin` (`id`, `admin_user`, `admin_pass`, `admin_uuid`, `login_ip`, `login_time`, `admin_rank`, `admin_power`) VALUES
(1, 'wzq', 'f34a1acaad91e14200247aa2c68c6118', '793d91e2-ef0d-0ab3-405f-b0aa0be6f094', '11.85.63.53', 1412847387, 0, 1),
(2, 'weihu', '158dc2d53366fd1fddf958e9a78d2f91', '639583db-d653-0987-666e-863acc2d26cd', '163.56.33.2', 1460348170, 2, 3),
(3, 'guanli', 'b58f80798fe58a9595f308273e3fdaaf', 'ebb16ed3-3ef3-89c4-afb2-a20642a310e3', '119.180.64.89', 1460529247, 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `xsser_basket`
--

CREATE TABLE `xsser_basket` (
  `id` bigint(20) NOT NULL auto_increment,
  `user_id` bigint(20) NOT NULL COMMENT '用户ID',
  `product_id` bigint(20) NOT NULL COMMENT '产品id',
  `number` bigint(20) NOT NULL default '0' COMMENT '数量',
  `ctime` int(20) NOT NULL COMMENT '创建时间',
  `bak1` varchar(800) NOT NULL,
  `bak2` varchar(800) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `xsser_basket`
--


-- --------------------------------------------------------

--
-- 表的结构 `xsser_conf`
--

CREATE TABLE `xsser_conf` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `conf` varchar(60) NOT NULL COMMENT '键',
  `value` longtext NOT NULL COMMENT '值',
  `bak1` longtext NOT NULL,
  `bak2` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 导出表中的数据 `xsser_conf`
--

INSERT INTO `xsser_conf` (`id`, `conf`, `value`, `bak1`, `bak2`) VALUES
(4, '网站标题', 'XXXX有限公司', '', ''),
(5, '网站关键词', 'XXXX有限公司', '', ''),
(6, '网站描述', 'XXXX有限公司', '', ''),
(7, '发件邮箱地址', 'xsser@xsser.cc', '', ''),
(8, '邮箱SMTP服务器', 'smtp.xx.com', '', ''),
(9, '邮箱登录帐号', 'xsser@xsser.cc', '', ''),
(10, '邮箱密码', '', '', ''),
(11, '邮箱收件箱', 'tester@xxx.com', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_coupon`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `xsser_coupon`
--

INSERT INTO `xsser_coupon` (`id`, `name`, `price`, `description`, `ftime`, `gtime`, `bak1`, `bak2`) VALUES
(1, '商场上线全场订单减10元', '10', '商场上线全场订单减10元', 1460044800, 1485964800, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_coupon_give`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `xsser_coupon_give`
--

INSERT INTO `xsser_coupon_give` (`id`, `ftime`, `user_id`, `admin_id`, `coupon_id`, `is_use`, `bak1`, `bak2`) VALUES
(1, 1460102016, 1, 5, 1, 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_goumai`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `xsser_goumai`
--


-- --------------------------------------------------------

--
-- 表的结构 `xsser_info`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

--
-- 导出表中的数据 `xsser_info`
--
-- --------------------------------------------------------

--
-- 表的结构 `xsser_jifen`
--

CREATE TABLE `xsser_jifen` (
  `id` bigint(20) NOT NULL auto_increment,
  `time` int(20) NOT NULL COMMENT '操作时间',
  `user_id` bigint(20) NOT NULL COMMENT '用户id',
  `admin_id` int(11) NOT NULL,
  `jilu` varchar(255) NOT NULL COMMENT '记录描述',
  `bak1` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `xsser_jifen`
--

INSERT INTO `xsser_jifen` (`id`, `time`, `user_id`, `admin_id`, `jilu`, `bak1`) VALUES
(1, 1460101993, 1, 1, '执行了(增加10分)操作', '');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_modual`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `xsser_modual`
--

INSERT INTO `xsser_modual` (`id`, `modual_type`, `database_table`, `modual_name`, `shuxing_name`, `shuxing_type`, `table_field`, `active`, `show_level`) VALUES
(1, 0, 'new_modual_', '默认', '描述', 'area1', '', 1, 500),
(2, 0, 'new_modual_', '首页轮播图片', '小图片|大图片', 'upload|upload', '', 1, 500),
(3, 0, 'new_modual_', '在线留言', '姓名|电话|留言', 'text|text|area1', '', 1, 500),
(4, 0, 'new_modual_', '单纯的轮播图', '图片|链接地址', 'upload|text', '', 1, 500),
(5, 1, 'new_modual_ceshi', '高级模型测试', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框|高级单选框|下拉框|复选框|sql类型', 'text|area1|area2|upload|pic|radio|radio2|listtype|checkbox|sqltype', 'text|area1|area2|upload|pic|radio|radio2|listtype|checkbox|sqltype', 1, 500);

-- --------------------------------------------------------

--
-- 表的结构 `xsser_modual_field_content`
--

CREATE TABLE `xsser_modual_field_content` (
  `id` int(11) NOT NULL auto_increment,
  `modual_id` int(11) NOT NULL COMMENT '模型ID',
  `select_field` varchar(800) character set utf8 NOT NULL COMMENT '高级模型中要填数据的字段',
  `content` text character set utf8 NOT NULL COMMENT '对应字段名的数据内容',
  `bak` varchar(800) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `xsser_modual_field_content`
--

INSERT INTO `xsser_modual_field_content` (`id`, `modual_id`, `select_field`, `content`, `bak`) VALUES
(1, 5, 'sqltype', '3', ''),
(2, 5, 'checkbox', '红鲤鱼,绿鲤鱼,驴', ''),
(3, 5, 'listtype', '汗血马,蒙古马,大司马', ''),
(4, 5, 'radio2', '男,女,人妖', '');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_news`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `xsser_news`
--

INSERT INTO `xsser_news` (`id`, `type_id`, `user_id`, `news_title`, `news_content`, `news_reco`, `news_user`, `news_time`, `news_modify_time`, `news_view_time`, `view_count`, `active`, `show_level`, `title`, `keyword`, `description`, `php_page`, `html_page`, `bak1`, `bak2`, `ip`) VALUES
(1, 1, 1, '网站底部信息', '&lt;p&gt;XXXXXXXXXXXXX有限公司 &amp;nbsp; 备案号123456789-1&lt;/p&gt;', 1, '', 1461427200, 1461464586, 0, 0, 1, 500, '', '', '', '', '', '', '', NULL),
(2, 2, 1, 'hello world！', '&lt;p&gt;这是一条XSSER_CMS测试新闻内容!&lt;/p&gt;', 0, 'wzq', 1461464942, 1461464942, 0, 0, 1, 500, '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `xsser_news_type`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `xsser_news_type`
--

INSERT INTO `xsser_news_type` (`id`, `type_name`, `type_type`, `type_rank`, `type_parent`, `active`, `show_level`, `isshow`, `title`, `keyword`, `description`, `php_page`, `html_page`, `bak1`, `bak2`) VALUES
(1, '网站底部信息', 0, 1, 0, 1, 1000, 1, '', '', '', '', '', '', ''),
(2, '新闻中心', 1, 1, 0, 1, 500, 1, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_new_modual_ceshi`
--

CREATE TABLE `xsser_new_modual_ceshi` (
  `id` bigint(20) NOT NULL auto_increment,
  `text` varchar(800) default NULL,
  `area1` varchar(800) default NULL,
  `area2` text,
  `upload` varchar(800) default NULL,
  `pic` varchar(800) default NULL,
  `radio` tinyint(3) default NULL,
  `radio2` varchar(800) default NULL,
  `listtype` varchar(800) default NULL,
  `checkbox` varchar(800) default NULL,
  `sqltype` varchar(500) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `xsser_new_modual_ceshi`
--

INSERT INTO `xsser_new_modual_ceshi` (`id`, `text`, `area1`, `area2`, `upload`, `pic`, `radio`, `radio2`, `listtype`, `checkbox`, `sqltype`) VALUES
(1, '普通文本输入框修改', '普通小型描述框修改', '<p>富文本编辑器描述框修改 <br/></p>', '上传图片，文件修改', '上传图片修改', 0, '人妖', '大司马', '红鲤鱼,驴', '鳙鱼');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_order`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `xsser_order`
--


-- --------------------------------------------------------

--
-- 表的结构 `xsser_product`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `xsser_product`
--

INSERT INTO `xsser_product` (`id`, `type_id`, `user_id`, `product_title`, `product_pic_s`, `product_pic_b`, `product_content`, `product_reco`, `product_user`, `product_time`, `product_modify_time`, `product_view_time`, `view_count`, `param`, `tuijian_id_group`, `active`, `show_level`, `title`, `keyword`, `description`, `php_page`, `html_page`, `bak1`, `bak2`, `ip`) VALUES
(1, 3, 1, '鲤鱼', '', '', '', 0, 'wzq', 1461427200, 1461463634, 0, 0, '', '', 1, 500, '', '', '', '', '', '', '', NULL),
(2, 3, 1, '草鱼', '', '', '', 0, 'wzq', 1461427200, 1461463644, 0, 0, '', '', 1, 500, '', '', '', '', '', '', '', NULL),
(3, 3, 1, '鳙鱼', '', '', '', 0, 'wzq', 1461427200, 1461463656, 0, 0, '', '', 1, 500, '', '', '', '', '', '', '', NULL),
(4, 5, 1, '标题修改', '缩略图修改', '大图修改', '&lt;p&gt;内容修改 &lt;br/&gt;&lt;/p&gt;', 1, 'wzq', 1461427200, 1461464408, 0, 16, '1', '', 1, 500, 'title(标题)修改', 'keyword(关键词)修改', 'description(描述)修改', '', '', '', '补充信息修改', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `xsser_product_type`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `xsser_product_type`
--

INSERT INTO `xsser_product_type` (`id`, `type_name`, `type_type`, `type_rank`, `type_parent`, `modual_id`, `database_table`, `shuxing_name`, `shuxing_type`, `table_field`, `active`, `show_level`, `isshow`, `title`, `keyword`, `description`, `php_page`, `html_page`, `bak1`, `bak2`) VALUES
(1, '新鲜鱼类', 1, 1, 0, 1, '', '描述', 'area1', '', 1, 500, 1, '', '', '', '', '', '', ''),
(2, '海水鱼', 1, 2, 1, 1, '', '描述', 'area1', '', 1, 500, 1, '', '', '', '', '', '', ''),
(3, '淡水鱼', 1, 2, 1, 1, '', '描述', 'area1', '', 1, 500, 1, '', '', '', '', '', '', ''),
(4, '首页轮播图片', 101, 1, 0, 4, '', '图片|链接地址', 'upload|text', '', 1, 500, 1, '', '', '', '', '', '', ''),
(5, '高级自定义产品测试', 2, 1, 0, 5, 'new_modual_ceshi', '普通文本输入框|普通小型描述框|富文本编辑器描述框|上传图片，文件|上传图片|单选框|高级单选框|下拉框|复选框|sql类型', 'text|area1|area2|upload|pic|radio|radio2|listtype|checkbox|sqltype', 'text|area1|area2|upload|pic|radio|radio2|listtype|checkbox|sqltype', 1, 500, 1, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_quanxian_caozuomodule`
--

CREATE TABLE `xsser_quanxian_caozuomodule` (
  `id` int(11) NOT NULL auto_increment,
  `power_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `view` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `xsser_quanxian_caozuomodule`
--


-- --------------------------------------------------------

--
-- 表的结构 `xsser_quanxian_caozuon`
--

CREATE TABLE `xsser_quanxian_caozuon` (
  `id` int(11) NOT NULL auto_increment,
  `power_id` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `add` tinyint(4) NOT NULL default '0',
  `del` tinyint(4) NOT NULL default '0',
  `up` tinyint(4) NOT NULL default '0',
  `select` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `xsser_quanxian_caozuon`
--


-- --------------------------------------------------------

--
-- 表的结构 `xsser_quanxian_caozuop`
--

CREATE TABLE `xsser_quanxian_caozuop` (
  `id` int(11) NOT NULL auto_increment,
  `power_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `add` tinyint(4) NOT NULL default '0',
  `del` tinyint(4) NOT NULL default '0',
  `up` tinyint(4) NOT NULL default '0',
  `select` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `xsser_quanxian_caozuop`
--


-- --------------------------------------------------------

--
-- 表的结构 `xsser_quanxian_moduletable`
--

CREATE TABLE `xsser_quanxian_moduletable` (
  `id` int(11) NOT NULL auto_increment,
  `module_name` varchar(300) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- 导出表中的数据 `xsser_quanxian_moduletable`
--

INSERT INTO `xsser_quanxian_moduletable` (`id`, `module_name`) VALUES
(1, '单页栏目'),
(2, '新闻栏目'),
(3, '产品(普通自定义)栏目'),
(4, '其他自定义栏目'),
(5, '产品(高级自定义)栏目'),
(6, '商城系统'),
(7, '系统设置与管理'),
(8, '评论管理'),
(9, '工具箱');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_quanxian_power`
--

CREATE TABLE `xsser_quanxian_power` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) character set utf8 NOT NULL,
  `rank` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `xsser_quanxian_power`
--

INSERT INTO `xsser_quanxian_power` (`id`, `name`, `rank`) VALUES
(1, '系统管理员', 0),
(2, '管理员', 1),
(3, '维护人员', 2);

-- --------------------------------------------------------

--
-- 表的结构 `xsser_reply`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `xsser_reply`
--

INSERT INTO `xsser_reply` (`id`, `user_id`, `posts_id`, `show`, `content`, `ip`, `time`, `bak1`) VALUES
(1, 5, 1, 0, 0x68656c6c6f21, '127.0.0.1', 1460389754, ''),
(2, 1, 2, 0, 0xe8b0a2e8b0a2e4bda021, '127.0.0.1', 1461465116, '');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_replyposts`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `xsser_replyposts`
--

INSERT INTO `xsser_replyposts` (`id`, `user_id`, `posts_id`, `norp`, `show`, `content`, `name`, `email`, `site`, `ip`, `time`, `bak1`) VALUES
(1, 1, 1, 1, 1, 0xe7b396e9868be9b2a4e9b1bce5a5bde59083efbc81, '张三', 'email@qq.com', '', '127.0.0.1', 0, ''),
(2, 1, 2, 0, 1, 0xe4b88de99499e593a6efbc81, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `xsser_user`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `xsser_user`
--

INSERT INTO `xsser_user` (`id`, `uuid`, `state`, `nname`, `username`, `password`, `sex`, `email`, `jifen`, `address_id`, `face`, `regtime`, `regip`, `bak1`, `bak2`) VALUES
(1, '392b074c-1d48-464e-5fe2-1db2ecbc98fa', 1, '小明', 'tester', 'c237b899ec4eadf22c96206de4d7d5ed', 1, '123456789@qq.com', 10, 0, '', 1460044800, '127.0.0.1', '', '');
