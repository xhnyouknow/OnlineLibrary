<?php
//管理员登录操作
	 if(isset($_POST["submit"]) && $_POST["submit"] == "登录")  
    {  
        $psw = $_POST["password"];
	   
        if($psw == "")  
        {  
            echo "<script>alert('please enter your password!'); history.go(-1);</script>";  
        }  
        else  
        {   
            include_once("loading.php");
          $query="select password from manager where id='man' ";
         $result=mysql_query($query);
         $row=mysql_fetch_array($result);
         $pass=$row["password"];
           if($psw==$pass)  
            {  
			     
                header("Location:mhome.php");
                
            }  
            else  
            {  
                echo "<script>alert('error password!".$id.$password.$result."');history.go(-1);</script>";  
            }  
        }  }
    
    else  
    {  
        echo "<script>alert('fail submit!'); history.go(-1);</script>";  
    }  
	
?>

