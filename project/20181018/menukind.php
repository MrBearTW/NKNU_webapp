<?php

    if(isset($_GET["f"]) ){
		
		writeMsg1($_GET["f"]);
		
	}
    
    function writeMsg1($a) {
       
	    require_once("menukindread.php");
		
        while($result_row=mysql_fetch_assoc($result))
        {
	      
	      echo 
	      " <Button name=".
		  $result_row["menu_name"].
		  " onclick=cs('".
		  $result_row["menu_name"].
		  "',".
		  $result_row["menu_price"].
		  ")>".
		  $result_row["menu_name"].
		  "$".$result_row["menu_price"].
		  "</button><br/>"
	      ;
	     
        }

	   
    }
	

?>