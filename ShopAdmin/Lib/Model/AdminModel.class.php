<?php
class AdminModel extends Model {

    // 自动验证设置
    protected $_validate = array(
        array('admin_user', 'require', '账户必须填写！', self::MODEL_BOTH),//1为必须验证
        array('admin_user', '', '账户已经存在', 0, 'unique', self::MODEL_BOTH),
        array('admin_pass', 'require', '密码必须填写！'),
        array('admin_pass','6,30','标题过短或者过长，范围为6-30个字符！',3,'length'), // 验证长度
    );
    
    
//    // 自动填充设置
//    protected $_auto = array(
//        array('create_time', 'time', self::MODEL_INSERT, 'function'),
//    );

}