xsser_cms
=========
In 2014, a simple CMS(PHP,ThinkPHP)
E-mail: xsser@xsser.cc

后台基于ThinkPHP 3.1.3开发,PHP运行版本5.2
从2014年末开始陆续利用空闲时间开始做,目标不是替代和超越市场上任何成型的CMS，相对企业WEB需求用起来他们显得太庞大或复杂，这里只追求一种简约。
<<<<<<< HEAD
你或许会发现单页栏目和新闻栏目可以丝毫不需使用。产品中心是核心内容板块。CMS部分已基本成型并且已经应用于开发企业WEB,后期陆续开发简单的论坛和商城部分。
=======
你或许会发现单页栏目和新闻栏目可以丝毫不需使用。产品中心是核心内容板块。
>>>>>>> parent of 6439a27... 内容格式

数据库文件位置 Library/DBBAK/xsser_cms.sql
数据库连接信息 Config/config.php
密码加密方式为 md5 ( 你的密码+ admin表中对应 ["admin_uuid"]的UUID )
后台访问位置   http://你的域名/admin.php  


之前更新省略。。CMS部分已基本成型并且已经应用于开发企业WEB,后期陆续开发简单的论坛和商城部分。

2016.4.24
数据模型增加sqltype、checkbox、listtype、radio2数据集合模型支持了前台的多级条件查询
