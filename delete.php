<?php
//管理员下架图书操作
$bid=$_GET["bid"];
include_once("loading.php");
$query="delete from book where bid=".$bid;
 $result=mysql_query($query);
 if($result>0){
	 header("Location:mhome.php"); 
	 
	 
	 }else{
		  echo "<script>alert('Delete failed!'); history.go(-1);</script>"; 
		 
		 }
	 
?>