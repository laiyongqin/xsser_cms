<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
/* 
遍历文件夹; 功能:(a)可删除文件 (b)可编辑文本,网页文件 (c)可删除文件夹,前提是该文件夹为空 (d)可建立文件,文件夹,修改文件夹名称; 
*/ 
$path=$_SERVER ['DOCUMENT_ROOT']."ShopHome/Tpl"; 
$path=str_replace("/","\\",$path); 
//指定文件夹 
$path=$path."\\"; 
if($_GET['folder']) 
{ 
$path.=$_GET['folder']."\\"; 
} 
//本页面路径,下面传回时将用到; 
$url=$_SERVER['PHP_SELF']; 
//如果是文件夹,将加上链接; 
function folder($path,$str) 
{ 
if(filetype($path.$str)=="dir") 
{ 
return "<a href=\"?folder=".$_GET['folder']."\\".$str."\">$str</a>"; 
}else{ 
return $str; 
} 
} 
switch($_GET['action']) 
{ 
case "del"; 
if($_GET['type']=="file") 
{ 
unlink($_GET['path']); 
}else{ 
rmdir($_GET['path']); 
} 
echo "<script type=\"text/javascript\">alert('恭喜,删除成功!');location.href=\"".$url."\";</script>"; 
break; 
case "edit"; 
if($_GET['type']=="file") 
{ 
$file=fopen($_GET['path'],"r"); 
while(!feof($file)) 
{ 
$result.=fgets($file,9999); 
} 
fclose($file); 
echo '<form name="form1" method="post" action="?action=editsave&path='.$_GET['path'].'&type='.$_GET['type'].'"> 
<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
<tr> 
<td height="25" bgcolor="#c4c4c4">>><strong> 编辑文件</strong> > <a href="'.$url.'">返回</a></td> 
</tr> 
<tr> 
<td height="25" align="left" bgcolor="#FFFFCC">->文件名:'.$_GET['path'].'</td> 
</tr> 
<tr> 
<td align="center" bgcolor="#FFFFFF"><textarea name="textarea" cols="135" rows="20">'.$result.'</textarea></td> 
</tr> 
<tr> 
<td align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交"> 
<input type="reset" name="Submit2" value="重置"></td> 
</tr> 
</table> 
</form>'; 
}else{ 
echo '<form name="form1" method="post" action="?action=dir_rename&path='.$_GET['path'].'&type='.$_GET['type'].'"> 
<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
<tr> 
<td height="25" bgcolor="#c4c4c4">>><strong> 新建文件</strong> > <a href="'.$url.'">返回</a></td> 
</tr> 
<tr> 
<td height="25" align="left" bgcolor="#FFFFCC">->文件夹更名: 
<input name="filename" type="text" value="'.$_GET['path'].'" size="50"></td> 
</tr> 
<tr> 
<td align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交"> 
<input type="reset" name="Submit2" value="重置"></td> 
</tr> 
</table> 
</form>'; 
} 
break; 
case "editsave"; 
$file=fopen($_GET['path'],"w"); 
fwrite($file,$_POST['textarea']); 
fclose($file); 
echo "<script type=\"text/javascript\">alert('恭喜,编辑成功!');location.href=\"".$url."\";</script>"; 
break; 
case "addfile"; 
echo '<form name="form1" method="post" action="?action=filesave&path='.$_GET['path'].'"> 
<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
<tr> 
<td height="25" bgcolor="#c4c4c4">>><strong> 新建文件</strong> > <a href="'.$url.'">返回</a></td> 
</tr> 
<tr> 
<td height="25" align="left" bgcolor="#FFFFCC">->文件名: 
<input name="filename" type="text" value="'.$_GET['path'].'" size="50"></td> 
</tr> 
<tr> 
<td align="center" bgcolor="#FFFFFF"><textarea name="textarea" cols="135" rows="20">输入内容 
</textarea></td> 
</tr> 
<tr> 
<td align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交"> 
<input type="reset" name="Submit2" value="重置"></td> 
</tr> 
</table> 
</form>'; 
break; 
case "filesave"; 
//包含点则建立文件,否则建立文件夹 
if(strpos($_POST['filename'],".")) 
{ 
$file=fopen($_POST['filename'],"w"); 
fwrite($file,$_POST['textarea']); 
fclose($file); 
}else{ 
//文件夹若存在则退出,不存在则建立! 
if(file_exists($_POST['filename'])) 
{ 
exit; 
}else{ 
mkdir($_POST['filename']); 
} 
} 
echo "<script type=\"text/javascript\">alert('恭喜,".$_POST['filename']."建立成功!');location.href=\"".$url."\";</script>"; 
break; 
case "dir_rename"; 
rename($_GET['path'],$_POST['filename']); 
echo "<script type=\"text/javascript\">alert('恭喜,".$_POST['filename']."改名成功!');location.href=\"".$url."\";</script>"; 
break; 
default: 
$s=explode("\n",trim(`dir/b/o:gn $path`)); 
echo '<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
<tr> 
<td height="25" colspan="4" bgcolor="#c4c4c4">>><strong> 文件管理</strong> > <a href="?action=addfile&path='.$path.'">建立文件</a> > <a href="'.$url.'">返回</a></td> 
</tr> 
<tr> 
<td height="25" align="center" bgcolor="#FFFFCC">文件/文件夹</td> 
<td align="center" bgcolor="#FFFFCC">文件属性</td> 
<td align="center" bgcolor="#FFFFCC">文件大小</td> 
<td align="center" bgcolor="#FFFFCC">操作</td> 
</tr>'; 
foreach($s as $value) 
{ 
echo ' 
<tr> 
<td height="25" bgcolor="#FFFFFF">'.folder($path,$value).'</td> 
<td align="center" bgcolor="#FFFFFF">'.filetype($path.$value).'</td> 
<td align="right" bgcolor="#FFFFFF">'.round(filesize($path.$value)/1024).'kb</td> 
<td align="center" bgcolor="#FFFFFF"><a href="?action=edit&path='.$path.'\\'.$value.'&type='.filetype($path.$value).'">编辑</a> <!-- | <a href="?action=del&path='.$path.'\\'.$value.'&type='.filetype($path.$value).'" onClick="return confirm(\'确定删除->'.$value.'\');">删除</a>--></td> 
</tr>'; 
} 
echo "</table>"; 
break; 
} 
?>