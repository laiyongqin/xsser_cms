<?php
class UserModel extends Model {

    // 自动验证设置
    protected $_validate = array(
        array('username', 'require', '用户名必须填写！', self::MODEL_BOTH),
        array('password', 'require', '密码必须填写！',self::MODEL_INSERT),
        array('username', '', '用户名已经存在', 0, 'unique', self::MODEL_BOTH),
        array('state', 'require', '是否禁用必须填写！'),
        array('sex', 'require', '性别必须填写！'),
        array('email', 'require', '邮箱必须填写！'),
        array('regtime', 'require', '注册时间必须填写！'),
        array('email', '', '邮箱已经存在!', 0, 'unique', self::MODEL_BOTH),
        array('username','6,30','用户名过短或者过长，范围为6-30个字符！',3,'length'), // 验证长度
        array('password','6,30','密码过短或者过长，范围为6-30个字符！',3,'length'), // 验证长度
    );
    
    
//    // 自动填充设置
//    protected $_auto = array(
//        array('create_time', 'time', self::MODEL_INSERT, 'function'),
//    );

}