<?php

session_start();
echo "管理人員的功能單<hr>";

if($_SESSION["userinputcode"]=="e0001"){
   echo "主管功能開啟<hr>";

             header("Content-type:text/html;charset=UTF-8");
             $db_link=mysql_connect("localhost","root","");
             mysql_query("SET NAMES utf8");
             $seledb=mysql_select_db("coustmer");
             $sql_query="SELECT * FROM `menu`";
             $result=mysql_query($sql_query);
             $txtarray=array();
			
			//table 
             while($result_row=mysql_fetch_assoc($result)){			 
             
			    echo "<font>總類:".$result_row["menu_group"]." 名稱:".$result_row["menu_name"]."</font>  ";
				echo "<Button>修改</Button>";	
                echo "<hr>";
               		
			}

			
}



?>