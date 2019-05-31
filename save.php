<?php
//用户借书操作
$bid=$_GET["bid"];
include_once("loading.php");
$query="select note,bname,author from book where bid=".$bid;
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$n=$row["note"];
$bname=$row["bname"];
$author=$row["author"];

if($n=="yes"){
	 
	   $query="update book set note='no' where bid=".$bid;
      $result=mysql_query($query);
	  if($result>0){
		  session_start();
		  $id=$_SESSION["id"];
		  $name=$_SESSION["name"];
		  $query="insert into rentbook(bid,id,bname,name,author)values('".$bid."','".$id."','".$bname."','".$name."','".$author."');";
      $result=mysql_query($query);
	  if($result>0){
		  echo "<script>alert('rent successfully!'); history.go(-1);</script>";
	  }else {
		  echo "<script>alert('update unsuccessfully!'); history.go(-1);</script>";
		  }
		  }else { 
		  echo "<script>alert('rent unsuccessfully!'); history.go(-1);</script>";
		  }
	}else{
		echo "<script>alert('Sorry,the book has been rent!'); history.go(-1);</script>";
		}
		$smarty->display("");
?>