<?php
class ProductTypeModel extends Model{

    // 自动验证设置
    protected $_validate = array(
        array('type_name', 'require', '类型名称必须填写！', self::MODEL_BOTH),//1为必须验证
        array('type_type', 'require', '类型类别必须填写！', self::MODEL_BOTH),
        array("type_type","/^\d*$/","类型类别必须是数字！",1,"regex",self::MODEL_BOTH),
        array('type_parent', 'require', '上级类别必须填写！', self::MODEL_BOTH),
        array("type_parent","/^\d*$/","上级类别必须是数字！",1,"regex",self::MODEL_BOTH),
        array('active', 'require', '是否审核必须选择！', self::MODEL_BOTH),
        array("active","/^\d*$/","是否审核必须是数字！",1,"regex",self::MODEL_BOTH),
        array('show_level', 'require', '排序数字必须填写！', self::MODEL_BOTH),
        array("show_level","/^\d*$/","排序数字必须是数字！",1,"regex",self::MODEL_BOTH),
        array('isshow', 'require', '是否显示在导航必须选择！', self::MODEL_BOTH),
        array("isshow","/^\d*$/","是否显示必须是数字！",1,"regex",self::MODEL_BOTH),
        array('modual_id', 'require', '模型必须选择！', self::MODEL_BOTH),
        array("modual_id","/^\d*$/","模型必须是数字！",1,"regex",self::MODEL_BOTH),
    );
    
    
//    // 自动填充设置
//    protected $_auto = array(
//        
//    );

}