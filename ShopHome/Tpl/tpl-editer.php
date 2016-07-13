<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php @session_start();?>
<?php @ob_start();?>
<?php 
if(!isset($_SESSION["admin_id"]) or !isset($_SESSION["admin_name"])) {
     echo "没有登录,未授权不能操作呦！";
     exit();
}
?>
<?php
error_reporting(0);

/* 获取文件大小 */
function getSize(&$fs)
{
    if ($fs < 1024)
        return $fs . "Byte";
    elseif ($fs >= 1024 && $fs < 1024 * 1024)
        return @number_format($fs / 1024, 3) . " KB";
    elseif ($fs >= 1024 * 1024 && $fs < 1024 * 1024 * 1024)
        return @number_format($fs / 1024 * 1024, 3) . " M";
    elseif ($fs >= 1024 * 1024 * 1024)
        return @number_format($fs / 1024 * 1024 * 1024, 3) . " G";
}
// 编辑文件
$edit_flag = false;
if (@$_GET['editfile'] != "") {
    $flag_show = 1;
    $editfile = $_GET['editfile'];
    if (file_exists($editfile)) {
        $edit_flag = true;
        $handle = fopen($editfile, "r");
        $contentfile = fread($handle, filesize($editfile));
        fclose($handle);
    } else {
        return false;
        echo "<script>alert(\"文件不能编辑\")</script>";
    }
} else {
    $flag_show = 0;
}
/* 检测当前目录值 */
$CurrentPath = $_POST['path'] ? $_POST['path'] : ($_GET['path'] ? $_GET['path'] : false);
if ($CurrentPath === false) {
    $CurrentPath = dirname(__FILE__);
}
$CurrentPath = realpath(str_replace('\\', '/', $CurrentPath));
/* 检查完毕 */

/* 编辑内容 */
if ($_POST['editcontent']) {
    $path_up = $_POST['path_f'];
    $contents_file_up = $_POST['contents_file'];
    if (get_magic_quotes_gpc()) // 如果get_magic_quotes_gpc()是打开的
{
        $contents_file_up = stripslashes($contents_file_up); // 将字符串进行处理
    }
    $handle = fopen($path_up, "w");
    if ($handle) {
        fwrite($handle, $contents_file_up);
        fclose($handle);
        echo "<script>alert(\"编辑成功\")</script>";
    } else {
        return false;
        echo "<script>alert(\"编辑失败\")</script>";
    }
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>模版在线编辑</title>
<script type="text/javascript">
function edit()
{
   document.getElementById('edit').style.display="";
}
</script>
<style type="text/css">
<!--
body {
	font-family: "宋体";
	font-size: 12px;
	margin-left: 0px;
	margin-top: 0px;
}

table {
	font-family: "宋体";
	font-size: 12px;
	text-decoration: none;
}

.bold_blue {
	color: #003399;
	font-weight: bold;
}

input {
	border-right-width: 0.1mm;
	border-bottom-width: 0.1mm;
	border-top-style: none;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: none;
	border-right-color: #CCCCCC;
	border-bottom-color: #CCCCCC;
}
-->
</style>

</head>
<body>
	<table width="1200" border="0" align="center" cellpadding="5"
		cellspacing="0">
		<tr>
			<td bgcolor="#DDDDDD">
				<table width="100%" border="0" cellspacing="0" cellpadding="5">
					<tr>
						<td bgcolor="#BCBCBC"><strong>子目录</strong></td>
					</tr>
					<tr>
						<td>
							<table width="100%" border="0" cellpadding="0" cellspacing="5"
								bgcolor="#EFEFEF">
								<tr>
									<td><b>目录名</b></td>
									<!--<td><b>操作</b></td>-->
								</tr>
					<?php
    $fso = @opendir($CurrentPath);
    while ($file = @readdir($fso)) {
        $fullpath = "$CurrentPath/$file";
        $is_dir = @is_dir($fullpath);
        if ($is_dir == "1") {
            if ($file != ".." && $file != ".") {
                echo "<tr bgcolor=\"#EFEFEF\">\n";
                echo "<td>【目录】 <a href=\"?path=" . urlencode($CurrentPath) . "/" . urlencode($file) . "\">$file</a></td>\n";
                // echo "<td><a href=\"?path=".urlencode($CurrentPath)."&deldir=".urlencode($fullpath)."\">delete</a></td>\n";
                echo "</tr>\n";
            } else {
                if ($file == "..") {
                    echo "<tr bgcolor=\"#EFEFEF\">\n";
                    // echo "<td>【上级】 <a href=\"?path=".urlencode($CurrentPath)."/".urlencode($file)."\">上级目录</a></td>";
                    echo "<td>【返回】<a href=\"/ShopHome/Tpl/tpl-editer.php\">模版根目录 </a></td>";
                    echo "</tr>\n";
                }
            }
        }
    }
    @closedir($fso);
    ?>
				</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#BDBEBD"><strong>文件列表</strong></td>
					</tr>
					<tr>
						<td>
							<table width="100%" border="0" cellpadding="0" cellspacing="5"
								bgcolor="#EFEFEF">
								<tr>
									<td><b>文件名</b></td>
									<td><b>修改日期</b></td>
									<td><b>文件大小</b></td>
									<td><b>操作</b></td>
								</tr>
					<?php
    $flag_file = 0; // 检测是否有文件
    $fso = @opendir($CurrentPath);
    while ($file = @readdir($fso)) {
        $fullpath = "$CurrentPath\\$file";
        $is_dir = @is_dir($fullpath);
        if ($is_dir == "0") {
            $flag_file ++;
            $size = @filesize("$CurrentPath/$file");
            $size = @getSize($size);
            $lastsave = @date("Y-n-d H:i:s", filemtime("$CurrentPath/$file"));
            echo "<tr bgcolor=\"#EFEFEF\">\n";
            echo "<td>◇ $file</td>\n";
            echo "  <td>$lastsave</td>\n";
            echo "  <td>$size</td>\n";
            ?>
					<td><input type="hidden" id="<?php echo $flag_file."path"?>"
									value="<?php echo $filec;?>"> <a
									href="?editfile=<?php echo urlencode($CurrentPath)."/".urlencode($file);?>"
									onclick="edit();">编辑</a></td>
						<?php
            // echo " <td><a href=\"?downfile=".urlencode($CurrentPath)."/".urlencode($file)."\">下载</a> |<a href=\"?path=".urlencode($CurrentPath)."&delfile=".urlencode($CurrentPath)."/".urlencode($file)."\">删除</a></td>\n";
            echo "</tr>\n";
        }
    }
    if ($flag_file == 0) {
        echo "<tr bgcolor=\"#EFEFEF\">\n";
        echo "<td align=\"center\" colspan=\"3\"><font style=\"color:red;\" size=\"10\">没有文件</font></td>";
        echo "</tr>\n";
    }
    @closedir($fso);
    ?>
				</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#BDBEBD"><strong>编辑内容</strong></td>
					</tr>
					<tr>
						<td>
							<div id="edit" <?php if($flag_show==0) {?> style="display: none"
								<?php }?>>
								<table width="100%" border="0" cellpadding="0" cellspacing="5"
									bgcolor="#EFEFEF">
									<form name="edit" method="post" action="">
										<tr>
											<td><input type="hidden" name="path_f"
												value="<?php echo $editfile;?>"></input> <textarea
													id="contents_edit" name="contents_file"
													style="width: 900px; min-height: 400px; overflow-y: visible;"><?php if($edit_flag){ echo   htmlspecialchars($contentfile);?><?php }else{ echo "no" ;}?>
							</textarea></td>
										</tr>
										<tr>
											<td><input style="background-color: gray" type="submit"
												name="editcontent" value="submit"></input></td>
										</tr>
									</form>
								</table>
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>