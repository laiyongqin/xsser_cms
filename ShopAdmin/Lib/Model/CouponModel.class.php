<?php
class CouponModel extends Model {

    //自动验证设置
    protected $_validate = array(
        array('name', 'require', '优惠卷名字必须填写！', self::MODEL_BOTH),
        array('price', 'require', '优惠价格必须填写！',self::MODEL_INSERT),
        array('ftime', 'require', '开始时间必须填写！'),
        array('gtime', 'require', '结束时间必须填写！'),
        array("price","/^\d*$/","优惠价格必须是数字！",1,"regex",self::MODEL_BOTH),
        array('ftime,gtime', 'checktime', '结束时间不能比开始时间小!', 1,'callback', self::MODEL_BOTH),
    );
    
     protected function checktime($data){
        $ftime=strtotime($data['ftime']);
        $gtime=strtotime($data['gtime']);
        if(($ftime-$gtime)>0){
	         return false;
        }else{
	         return true;
        }
     }
    
    // 自动填充设置
    protected $_auto = array(
       // array('create_time', 'time', self::MODEL_INSERT, 'function'),
        array('ftime','getformat_time',1,'function'),
        array('gtime','getformat_time',1,'function'),
    );
}