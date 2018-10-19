<?php

session_start();
echo "管理人員的功能單<hr>";

if($_SESSION["userinputcode"]=="e0001"){
   echo "主管功能開啟<hr>";

             header("Content-type:text/html;charset=UTF-8");
             $db_link=mysql_connect("localhost","root","123456789");
             mysql_query("SET NAMES utf8");
             $seledb=mysql_select_db("coustmer");
             $sql_query="SELECT * FROM `employee`";
             $result=mysql_query($sql_query);
             $txtarray=array();
			
			//table 
             while($result_row=mysql_fetch_assoc($result)){			 
             
                foreach($result_row as $value){
                  echo $value." ";
				  array_push($txtarray,$value);
				}
				
				
				$stx="<Button onclick=changeem('";
				$stx.=$txtarray[0]."','";
				$stx.=$txtarray[1]."','";
				$stx.=$txtarray[2]."','";
				$stx.=$txtarray[3]."','";
				$stx.=$txtarray[4]."')>修改</Button>";
				echo $stx;
                echo "<br/>";
                $txtarray=array();				
			}

			
}



?>