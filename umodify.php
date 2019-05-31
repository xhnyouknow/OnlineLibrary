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
<form id="form1" name="form1" method="post" action="saveum1.php">
  <table width="100%" border="0">
    <tbody>
      <tr>
        <td width="12%" align="center" valign="top" bgcolor="#E1D4BC"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><a href="uhome.php"><font color="#0B0707">图书列表 </font> </a>  </p>
          <p><a href="urent.php"><font color="#0B0707"> 已借阅书籍</font> </a>  </p>
        <p><a href="saveum.php"><font color="#5F3504">修改资料 </font> </a>  </p>
        <p><a href="main.php"><font color="#0B0707">退出 </font> </a>  </p></td>
        <td width="88%" height="447" align="center" valign="top" bgcolor="#E6E4E0"><p>        
        &nbsp;
        
        <table width="40%" border="0">
          <tbody>
            <tr>
              <td height="80" colspan="2" align="center" valign="middle" bgcolor="#D0C2A0"><h1>修改资料</h1></td>
            </tr>
            <tr>
              <td width="29%" align="right" valign="middle" bgcolor="#D2CFAD">用户姓名：</td>
              <td width="71%" height="40" align="left" bgcolor="#D2CFAD"><input type="text" name="name" value="{$name}"></td>
            </tr>
            <tr>
              <td align="right" valign="middle" bgcolor="#D2CFAD">个性签名：</td>
              <td height="40" align="left" bgcolor="#D2CFAD"><textarea name="intro" rows="4" >{$intro}</textarea></td>
            </tr>
            <tr>
              <td align="right" valign="middle" bgcolor="#D2CFAD">手机号：</td>
              <td height="40" align="left" bgcolor="#D2CFAD"><input type="text" name="name" value="{$tel}"></td>
            </tr>
            <tr>
              <td align="right" valign="middle" bgcolor="#D2CFAD">用户密码：</td>
              <td height="40" align="left" bgcolor="#D2CFAD"><input type="password" name="password" value="{$password}"/> </td>
            </tr>
            <tr>
              <td align="right" valign="middle" bgcolor="#D2CFAD">确认密码：</td>
              <td height="40" align="left" bgcolor="#D2CFAD"><input type="password" name="confirm"/> </td>
            </tr>
            <tr>
              <td height="40" colspan="2" align="center" valign="middle" bgcolor="#D2CFAD">
                <input type="submit" name="submit"  value="确认" >
                &nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
          </tbody>
        </table>
        
        </p></td>
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
