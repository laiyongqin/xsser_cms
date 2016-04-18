<?php
class ToolsdbAction extends BaseAction {
	
	public $c_letf_number = 9;
	
	//数据库备份
	public function dbbak() {
		//检验是否具有模块操作权限
		$this->check_quanxian_module ( $_SESSION ["admin_power"], $this->c_letf_number, 'view' );
		// 备份数据库
		$host = C ( 'DB_HOST' );
		$user = C ( 'DB_USER' ); //数据库账号
		$password = C ( 'DB_PWD' ); //数据库密码
		$dbname = C ( 'DB_NAME' ); //数据库名称
		// 这里的账号、密码、名称都是从页面传过来的
		if (! mysql_connect ( $host, $user, $password )) // 连接mysql数据库
{
			$this->error ( '数据库连接失败，请核对后再试' );
		}
		if (! mysql_select_db ( $dbname )) // 是否存在该数据库
{
			$this->error ( '不存在数据库:' . $dbname . ',请核对后再试' );
		}
		mysql_query ( "set names 'utf8'" );
		//$mysql = "set charset utf8;\r\n";
		$mysql = "\r\n";
		$q1 = mysql_query ( "show tables" );
		while ( $t = mysql_fetch_array ( $q1 ) ) {
			$table = $t [0];
			$q2 = mysql_query ( "show create table `$table`" );
			$sql = mysql_fetch_array ( $q2 );
			$mysql .= $sql ['Create Table'] . ";\r\n";
			$q3 = mysql_query ( "select * from `$table`" );
			while ( $data = mysql_fetch_assoc ( $q3 ) ) {
				$keys = array_keys ( $data );
				$keys = array_map ( 'addslashes', $keys );
				$keys = join ( '`,`', $keys );
				$keys = "`" . $keys . "`";
				$vals = array_values ( $data );
				$vals = array_map ( 'addslashes', $vals );
				$vals = join ( "','", $vals );
				$vals = "'" . $vals . "'";
				$mysql .= "insert into `$table`($keys) values($vals);\r\n";
			}
		}
		
		$filename = APP_WEB_ROOT . '/Library/DBBAK/' . $dbname . date ( 'Y_m_j_g_i' ) . ".sql"; //存放路径，默认存放到项目最外层
		$fp = fopen ( $filename, 'w' );
		fputs ( $fp, $mysql );
		fclose ( $fp );
		$this->success ( '数据备份成功!注意数据库备份后数据库文件会占用一定的服务器硬盘资源!' );
	}

}