<?php
$title=$_POST["title"];
$author=$_POST["author"];
$content=$_POST["content"];
include_once("loading.php");
$query="insert into Luser(title,author,content)values('".$title."','".$author."','".$content."');";
$result=mysql_query($query);
if($result>0){
	$smarty->assign("info","数据添加成功！");
	}else{
		$smarty->assign("info","数据添加失败！");
		}
		$smarty->display("savei.html");
?>