<?php 
//管理员新密码更新 
include_once("loading.php");
    if(isset($_POST["submit"]) && $_POST["submit"] == "确认")  
    {  
        
		 $password= $_POST["password"];
        $psw_confirm = $_POST["confirm"];  
        if($password == "" || $psw_confirm == "")  
        {  
            echo "<script>alert('please confirm the information!'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($password == $psw_confirm)  
            {  
                
                $sql = "update manager set password='".$password."' where id='man' ";
                $result = mysql_query($sql);    
      
                if($result>0)    
                {  
                    echo "<script>alert('Modify successfully!'); history.go(-1);</script>";  
                }  
                else    
                  {  
           
                echo "<script>alert('Modify failed!'); history.go(-1);</script>";  
                   }  
				   
             } else  
               {  
                echo "<script>alert('The password isn't common!'); history.go(-1);</script>";  
                } 
		}
	} else  
    {  
        echo "<script>alert('submit failed!'); history.go(-1);</script>";  
    }  
		
?>  