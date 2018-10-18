<?php


   header("Content-type:text/html;charset=UTF-8");
   $db_link=mysql_connect("localhost","root","");
   mysql_query("SET NAMES utf8");
   $seledb=mysql_select_db("coustmer");
   
  
   $singinpassword=$_POST["singinpassword"];
   $tel=$_POST["tel"];
   $email=$_POST["email"];
   $name=$_POST["name"];
  
   $sql_query="INSERT INTO `coustmer` (cu_password,cu_email,cu_phone,cu_name)";
   $sql_query.="VALUES('".$singinpassword."','". $email."','".$tel."','".$name."')";
  
   
   $result=mysql_query($sql_query);
   
   
   //讀取自動數值再編寫會員編碼
   
   
   $sql_query="Select (autoformnumber) From `coustmer` where cu_email=".$email;
   $result=mysql_query($sql_query);
   $result_row=mysql_fetch_assoc($result);
   //echo $result_row["autoformnumber"];
   $stxt=str_pad($result_row["autoformnumber"], 6,"0" ,STR_PAD_LEFT);
   $stxt=str_pad($stxt, 7,"c" ,STR_PAD_LEFT);
   
   
   $sql_query="UPDATE coustmer SET cu_id='".$stxt."' WHERE cu_email='".$email."' AND autoformnumber='".$result_row["autoformnumber"]."'";
   $result=mysql_query($sql_query);
   //echo $result;
   
   //顯示給登入資訊給註冊者
   $sql_query="SELECT  cu_id,cu_password FROM `coustmer` WHERE cu_name='".$name."' AND cu_email='".$email."' AND cu_phone='".$tel."'";
   $result=mysql_query($sql_query);
    while($result_row=mysql_fetch_assoc($result)){
	    
		echo "帳號:".$result_row["cu_id"]."<br/>";
		echo "密碼:".$result_row["cu_password"]."</br>";
         				
    }
   
   
   echo "已成功註冊 請使用者紀錄帳號與密碼,60秒後返回首頁";
   
   header("Refresh:60;url=index2.php");
    



?>