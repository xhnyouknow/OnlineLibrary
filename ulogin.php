<?php

//图书馆用户登录操作
if(isset($_POST["submit"]) && $_POST["submit"] == "登录")  
    {  
        $id = $_POST["id"];  
        $password = $_POST["password"]; 
        if($id == "" || $password == "")  
        {  
            echo "<script>alert('please enter your id or password!'); history.go(-1);</script>";  
        }  
        else  
        {  mysql_connect("localhost","j14044054","14044054");  
            mysql_select_db("j14044054");  
            mysql_query("set names utf8");  
            $sql = "select name from Luser where id = '".$id."' and password = '".$password."'";  
            $result = mysql_query($sql);  
           
			$row=mysql_fetch_array($result);
			$name=$row["name"]; 
            if($result>0)  
            {  
			     session_start();
                
                 session_register("id");
				 session_register("name");
                header("Location:uhome.php");
                
            }  
            else  
            {  
                echo "<script>alert('error id or password!".$id.$password.$result."');history.go(-1);</script>";  
            }  
        }  }
    
    else  
    {  
        echo "<script>alert('fail submit!'); history.go(-1);</script>";  
    }  
	
?> 	