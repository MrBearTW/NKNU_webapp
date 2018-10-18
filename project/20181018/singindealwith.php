<?php
    
       
	 header("Content-type:text/html;charset=UTF-8");
     $db_link=mysql_connect("localhost","root","");
     mysql_query("SET NAMES utf8");
     $seledb=mysql_select_db("coustmer");
	 $sql_query="SELECT * FROM `coustmer` where `cu_id`='".$_POST["userinputcode"]."' AND `cu_password`='".$_POST["userinputpassword"]."'";
	 $result=mysql_query($sql_query);
	 $c=mysql_num_rows($result);
	 
	 $seledb=mysql_select_db("coustmer");
	 $sql_query="SELECT * FROM `employee` where `emp_id`='".$_POST["userinputcode"]."' AND `emp_phone`='".$_POST["userinputpassword"]."'";
	 $result=mysql_query($sql_query);
	 $e=mysql_num_rows($result);
	 
	
	if($c==0 && $e==0){
	  echo "登入資訊錯誤";
	}
	else{
		//session 啟動   並轉換頁面 
		
		session_start();
		$_SESSION["userinputcode"] = $_POST["userinputcode"];
        $_SESSION["userinputpassword"] = $_POST["userinputpassword"];
		if($c==1)
		  $_SESSION["flags"]=0;
	    else
		  $_SESSION["flags"]=1;
        
        echo "normalpage.php";	  
		
	}
	
 



?>