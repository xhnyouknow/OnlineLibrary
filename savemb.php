<?php
//管理员修改书籍信息操作
$bname=$_POST["bname"];
$bid=$_POST["bid"];
$author=$_POST["author"];
$bintro=$_POST["bintro"];
include_once("loading.php");
$query="update book set bname='".$bname."',author='".$author."',bintro='".$bintro."' where bid=".$bid;
$result=mysql_query($query);
if($result>0){
	header("Location:mhome.php"); 
	}else{
		echo "<script>alert('update failed!'); history.go(-1);</script>"; 
		}
?>