<?php
//归还图书操作
$bid=$_GET["bid"];
include_once("loading.php");
$query="delete from rentbook where bid=".$bid;
 $result=mysql_query($query);
 if($result>0){
	   $query2="update book set note='yes' where bid=".$bid;
 $result2=mysql_query($query2);
 if($result2>0){
	 header("Location:urent.php"); 
 }else{
	  echo "<script>alert('Update failed!'); history.go(-1);</script>"; 
	 }
	 
	 }else{
		  echo "<script>alert('Delete failed!'); history.go(-1);</script>"; 
		 
		 }
	 
?>