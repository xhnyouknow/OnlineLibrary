<?php
$page=$_GET["page"];
$pageSize=10;
$startPage=intval($page);
$link=mysql_connect("localhost","j14044054","14044054");
mysql_select_db("j14044054");
mysql_query("set names utf8",$link);
$result=mysql_query("select * from book");
$total=mysql_num_rows($result);
$totalPage=ceil($total/$pageSize);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>图书列表</title>
</head>
<body>
<p><form id="form1" name="form1" method="post">
  <table width="100%" border="0">
    <tbody>
      <tr>
        <td width="24%" height="195" align="center" bgcolor="#FFFFFF"><img src="./images/Luna2.jpg" width="267" height="193" alt=""/></td>
        <td width="76%" align="center" bgcolor="#E0C090"><strong><font size="+6">Winnie's Library</font></strong></td>
      </tr>
    </tbody>
  </table>
</form>
</p>
<form id="form1" name="form1" method="post">
  <table width="100%" border="0">
    <tbody>
      <tr>
        <td width="12%" align="center" valign="top" bgcolor="#E1D4BC"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><a href="uhome.php"><font color="#5F3504">图书列表 </font> </a>  </p>
          <p><a href="urent.php"><font color="#0B0707"> 已借阅书籍</font> </a>  </p>
        <p><a href="saveum.php"><font color="#0B0707">修改资料 </font> </a>  </p>
        <p><a href="main.php"><font color="#0B0707">退出 </font> </a>  </p></td>
        <td width="88%" height="447" align="center" valign="top" bgcolor="#E6E4E0"><p>        
          <table width="100%" border="1">
  <tr>
    <td width="60%" align="center">书名</td>
    <td width="20%" align="center">作者</td>
    <td width="11%" align="center">在架</td>
    </tr>
     <?php
	 $result=mysql_query("select * from book limit ".$startPage*$pageSize.",".$pageSize);
while($row=mysql_fetch_array($result)){
	?>
  <tr>
    <td align="center">
    <?php

	
	print "<a href='bookinfo.php?bid={$row["bid"]}'>".$row["bname"]."</a>";


?>
    
    &nbsp;</td>
    <td align="center">
    <?php
	
    print $row["author"];	


?>
    
    &nbsp;</td>
    <td align="center">
      <?php
	  
    print $row["note"];	


?>
&nbsp;</td>
    </tr>
  <?php  
  }
	?>
  <tr>
    <td colspan="3" align="right">
      <?php
    if($page==0){
	?>
      首页	 &nbsp; 上页
      <?php
    }else{
	?>
      <a href="?page=0"><font color="#5F3504">首页</font></a>&nbsp;
      <a href="?page=<?php print ($page-1)?>"><font color="#5F3504">上页</font></a>&nbsp;
      <?php
	 }
    if($page==$totalPage-1){
	?>
      下页	 &nbsp; 尾页
      <?php
    }else{
	?>
      <a href="?page=<?php print ($page+1)?>"><font color="#5F3504">下页</font></a>&nbsp;
      <a href="?page=<?php print ($totalPage-1)?>"><font color="#5F3504">尾页</font></a>
      <?php
	}

	?>    </td>
    </tr>
</table>
&nbsp;</p></td>
      </tr>
    </tbody>
  </table>
</form>
<p> <form id="form1" name="form1" method="post">
  <table width="100%" border="0">
    <tbody>
      <tr>
        <td height="82" align="center" bgcolor="#0C3B02"><strong><font color="#F5F5F5" size="+1">made by @xhnyouknow</font></strong></td>
      </tr>
    </tbody>
  </table>
</form></p>
</body>
</html>
