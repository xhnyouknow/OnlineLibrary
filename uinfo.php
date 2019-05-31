<?php
//上传用户信息
$id=$_GET["id"];
include_once("loading.php");
$query="select name,intro,tel from Luser where id='".$id."'";
$result=mysql_query($query);
$row = mysql_fetch_array($result);    
$name=$row["name"];
$intro=$row["intro"];
$tel=$row["tel"];
$intro=str_replace(" ","&nbsp;",$intro);
$intro=nl2br($intro);
$smarty->assign("id",$id);
$smarty->assign("name",$name);
$smarty->assign("tel",$tel);
$smarty->assign("intro",$intro);
$smarty->display("uinfo.html");
?> 