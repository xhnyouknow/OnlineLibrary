<?php  
//用户修改个人资料操作02，保存提交新信息。
include_once("loading.php");
    if(isset($_POST["submit"]) && $_POST["submit"] == "确认")  
    {  
	     @session_start();
      $id=$_SESSION["id"];
        $tel = $_POST["tel"]; 
		$name = $_POST["name"];  
        $intro= $_POST["intro"]; 
		$password= $_POST["password"];
        $psw_confirm = $_POST["confirm"];  
        if($name == "" ||$tel == "" ||$intro == "" || $password == "" || $psw_confirm == "")  
        {  
            echo "<script>alert('please confirm the information!'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($password == $psw_confirm)  
            {  
                
                $sql = "update Luser set name='".$name."',tel='".$tel."',intro='".$intro."',password='".$password."'  where id='".$id."'";
                $result = mysql_query($sql);    
               
                if($result >0)    
                {  
                    echo "<script>alert('Modify successfully!'); history.go(-1);</script>";  
                }  
                else      
                {  
                   echo "<script>alert('Modify failed!'); history.go(-1);</script>";  
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