<?php
//管理员修改图书资料操作
$bid=$_GET["bid"];
include_once("loading.php");
$query="select bname,author,bintro from book where bid=".$bid;
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$bname=$row["bname"];
$author=$row["author"];
$bintro=$row["bintro"];
$content=str_replace(" ","&nbsp;",$content);
$content=nl2br($content);
$smarty->assign("bname",$bname);
$smarty->assign("bid",$bid);
$smarty->assign("author",$author);
$smarty->assign("bintro",$bintro);
$smarty->display("update.html");
?> 