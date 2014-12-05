<?php
class AddressModel extends Model {
    // 自动验证设置
    protected $_validate = array(
        array('user_id', 'require', '账户必须填写！', self::MODEL_BOTH),//1为必须验证
        array('changyong', 'require', '常用地址必须选择！'),
        array('shouhuo_name', 'require', '收货人必须填写！'),
        array('shouhuo_tel', 'require', '收货电话必须选择！'),
        array('shouhuo_address', 'require', '收货地址必须选择！'),
        array('shouhuo_name','2,25','收货人过短或者过长，范围为2-25个字符！',3,'length'), // 验证长度
    );
}