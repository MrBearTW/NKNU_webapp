<?php

 $sid_data="sa001";
 $spwd_data="sa001";
 
 $Sid=$_POST["Sid"];
 $Spwd=$_POST["Spwd"];
 
 
 if($sid_data==$Sid && $spwd_data==$Spwd){
	 
	 header("Location:student.php");
	 
	 }else{
		 
	 header("Location:slogin.php");	 
		 
		 }
 
 
 


?>
