<?php
class ProductModel extends Model{

    // 自动验证设置
    protected $_validate = array(
        array('product_title', 'require', '标题必须填写！', self::MODEL_BOTH),//1为必须验证
        array('product_reco', 'require', '是否推荐必须填写！', self::MODEL_BOTH),
        array("product_reco","/^\d*$/","是否推荐必须是数字！",1,"regex",self::MODEL_BOTH),
        array('product_time', 'require', '发布时间必须填写！', self::MODEL_BOTH),
        array("view_count","/^\d*$/","查看次数必须是数字！",1,"regex",self::MODEL_BOTH),
        array('active', 'require', '是否审核必须选择！', self::MODEL_BOTH),
        array("active","/^\d*$/","是否审核必须是数字！",1,"regex",self::MODEL_BOTH),
        array('show_level', 'require', '排序数字必须填写！', self::MODEL_BOTH),
        array("show_level","/^\d*$/","排序数字必须是数字！",1,"regex",self::MODEL_BOTH),
    );
    
    
    // 自动填充设置
//    protected $_auto = array(
//         array('status','1'),  // 新增的时候把status字段设置为1
//         array('password','md5',1,'function') , // 对password字段在新增的时候使md5函数处理
//         array('name','getName',1,'callback'), // 对name字段在新增的时候回调getName方法
//         array('create_time','time',2,'function'), // 对create_time字段在更新的时候写入当前时间戳
//    );
    
    
}