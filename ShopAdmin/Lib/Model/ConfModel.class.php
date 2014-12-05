<?php
class ConfModel extends Model {

    // 自动验证设置
    protected $_validate = array(
        array('conf', 'require', '全局参数名字必须填写！', self::MODEL_BOTH),//1为必须验证
        array('conf', '', '全局参数名字已经存在', 0, 'unique', self::MODEL_BOTH),
        array('value', 'require', '全局参数赋值必须填写！'),
    );
    
    
//    // 自动填充设置
//    protected $_auto = array(
//        array('create_time', 'time', self::MODEL_INSERT, 'function'),
//    );

}