<?php
//用户修改个人资料操作01，将原信息传到修改界面
 @session_start();
$id=$_SESSION["id"];
include_once("loading.php");
$query="select name,intro,tel,password from Luser where id='".$id."'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$name=$row["name"];
$tel=$row["tel"];
$intro=$row["intro"];
$password=$row["password"];
$intro=str_replace(" ","&nbsp;",$intro);
$intro=nl2br($intro);
$smarty->assign("name",$name);
$smarty->assign("tel",$tel);
$smarty->assign("password",$password);
$smarty->assign("intro",$intro);
$smarty->display("umodify.html");
?> 