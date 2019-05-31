<?php  
//新用户注册操作
include_once("loading.php");
    if(isset($_POST["submit"]) && $_POST["submit"] == "注册")  
    {  
        $id = $_POST["id"]; 
		$name = $_POST["name"];  
        $intro= $_POST["intro"]; 
		$tel= $_POST["tel"]; 
		 $password= $_POST["password"];
        $psw_confirm = $_POST["confirm"];  
        if($id == "" ||$intro == "" || $password == "" || $psw_confirm == "")  
        {  
            echo "<script>alert('please confirm the information!'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($password == $psw_confirm)  
            {  
                
                $sql = "select name from Luser where id = '".$id."'";   
                $result = mysql_query($sql);      
                $num = mysql_num_rows($result);   
                if($num>0)    //如果已经存在该用户  
                {  
                    echo "<script>alert('This ID has existed!'); history.go(-1);</script>";  
                }  
                else     
                {  
                    $sql_insert = "insert into Luser (name,id,password,intro,tel) values('".$name."','".$id."','".$password."','".$intro."','".$tel."')";  
                    $res_insert = mysql_query($sql_insert);  
                   
                    if($res_insert>0)  
                    {  
                        echo "<script>alert('Register successfully!'); history.go(-1);</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('system is busy,please try later！'); history.go(-1);</script>";  
                    }  
                }  
            }  
            else  
            {  
                echo "<script>alert('The password isn't common!'); history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('submit failed!'); history.go(-1);</script>";  
    }  
?>  