<?php
class ModualModel extends Model {

    // 自动验证设置
    protected $_validate = array(
        array('modual_name', 'require', '模型名字必须填写！', 1),//1为必须验证
        array('modual_name', '', '模型名字已经存在', 0, 'unique', self::MODEL_INSERT),
        array('modual_name', '', '模型名字已经存在', 0, 'unique', self::MODEL_UPDATE),
        array('shuxing_name', 'require', '属性显示名字必须填写！'),
        array('shuxing_type', 'require', '属性对应类型必须填写！'),
        array('modual_type', 'require', '是否创建数据库表必须选择！'),
        
        array('database_table,modual_type','checktablename', '自定义的数据库表名不能与现有的系统表相重复!', 1,'callback', self::MODEL_INSERT),
        array('database_table,modual_type','checktablename', '自定义的数据库表名不能与现有的系统表相重复!', 1,'callback', self::MODEL_UPDATE),
        array('database_table,modual_type','checktablename2','自定义的数据库表名不能与自己添加的表相重复!', 1,'callback', self::MODEL_INSERT),
        array('database_table,modual_type','checktablename2','自定义的数据库表名不能与自己添加的表相重复!', 1,'callback', self::MODEL_UPDATE),

        array('shuxing_name,shuxing_type,modual_type,table_field', 'checkwanzhengxing', '添加的参数不对等!', 1,'callback', self::MODEL_INSERT),
        array('shuxing_name,shuxing_type,modual_type,table_field', 'checkwanzhengxing', '添加的参数不对等!', 1,'callback', self::MODEL_UPDATE),
        array('table_field,modual_type', 'checkfieldnull', '表中对应字段不能为空!', 1,'callback', self::MODEL_INSERT),
        array('table_field,modual_type', 'checkfieldnull', '表中对应字段不能为空!', 1,'callback', self::MODEL_UPDATE),
        array('database_table,modual_type', 'checktablenull', '数据库中表名不能为空!', 1,'callback', self::MODEL_INSERT),
        array('database_table,modual_type', 'checktablenull', '数据库中表名不能为空!', 1,'callback', self::MODEL_UPDATE),
    );
    
    //验证模型字段数据格式完整性
    protected function checkwanzhengxing($data){
        $map = $data;
    	$param1=split('[|]',$map['shuxing_name']);
	    $param2=split('[|]',$map['shuxing_type']);
	    $param3=$map['modual_type'];
	    $param4=split('[|]',$map['table_field']);
	    if($param3==0){
	    	  if(count($param1)!=count($param2))
	          {
		          return false;
	          }else{
	              return true;
	          }
	    }else {
	    	  if(count($param1)==count($param2)  and count($param2)==count($param4) )
	          {
		          return true;
	          }else{
	              return false;
	          }
	    }
     }
     
     
     
     
     //自定义的数据库表名不能与现有的系统表相重复
     protected function checktablename($data){
     	    $system_table = C('XSSER_MY_TABLENAME');
     	    if($data['modual_type']==0){
     	    	return true;
     	    }else{
     	    	if (in_array(trim(strtolower($data['database_table'])),$system_table )){
		            return false;
	            }else {
	            	return true;
	            }
   	        }
     }
     
     //自定义的数据库表名不能与现有表相重复  更新时用的方法
     protected function checktablename2($data){
     	    if($data['modual_type']==0){
     	    	return true;
     	    }else{
     	        $Form = M("Modual");
     	        $cunzai =$Form->getByDatabase_table(trim(strtolower($data['database_table'])));
                if (!empty($cunzai) and $cunzai['database_table']!="" and trim(strtolower($data['database_table']))!=$cunzai['database_table']) {
                    return false;
                }else{
                    return true;
                }
   	        }
     }
     
     
     
     
     protected function checkfieldnull($data){
     	    if($data['modual_type']==0){
     	    	return true;
     	    }else{
     	    	if (trim(strtolower($data['table_field']))==""){
		            return false;
	            }else {
	            	return true;
	            }
   	        }
     }
     
    
     protected function checktablenull($data){
     	    if($data['modual_type']==0){
     	    	return true;
     	    }else{
     	    	if (trim(strtolower($data['database_table']))==""){
		            return false;
	            }else {
	            	return true;
	            }
   	        }
     }
    
//    // 自动填充设置
//    protected $_auto = array(
//        array('create_time', 'time', self::MODEL_INSERT, 'function'),
//    );

}