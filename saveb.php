<?php
//管理员上架新书籍操作
$bname=$_POST["bname"];
$author=$_POST["author"];
$bintro=$_POST["bintro"];
include_once("loading.php");
$query="insert into book(bname,author,bintro,note)values('".$bname."','".$author."','".$bintro."','yes');";
$result=mysql_query($query);
if($result>0){
	header("Location:mhome.php"); 
	
	}else{
		 echo "<script>alert('new-up failed!'); history.go(-1);</script>"; 
		}
		
?>