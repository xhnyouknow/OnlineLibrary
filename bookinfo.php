<?php
//用户查看图书信息操作
$bid=$_GET["bid"];
include_once("loading.php");
$query="select bname,author,bintro from book where bid=".$bid;
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$bname=$row["bname"];
$author=$row["author"];
$bintro=$row["bintro"];
$bintro=str_replace(" ","&nbsp;",$bintro);
$bintro=nl2br($bintro);
$smarty->assign("bid",$bid);
$smarty->assign("bname",$bname);
$smarty->assign("author",$author);
$smarty->assign("bintro",$bintro);
$smarty->display("bookinfo.html");
?> 