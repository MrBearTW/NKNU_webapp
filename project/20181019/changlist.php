<?php
             session_start();

             header("Content-type:text/html;charset=UTF-8");
             $db_link=mysql_connect("localhost","root","123456789");
             mysql_query("SET NAMES utf8");
             $seledb=mysql_select_db("coustmer");
			 //echo $_SESSION["flags"]."</br>";
			 //echo $_SESSION["userinputcode"]."</br>";
			 if($_SESSION["flags"]==1)
			  $sql_query="SELECT * FROM `oorder_detail`";
		     else
			  $sql_query="SELECT * FROM `oorder_detail` where csid='".$_SESSION["userinputcode"]."'";
		     //echo $sql_query;
             $result=mysql_query($sql_query);
			 //echo $result;
			 
			 echo "<點餐清單>";
			 echo "<table>";
             while($result_row=mysql_fetch_assoc($result)){
				  echo "<tr>";
				  echo "<td>";
				  //字串分割
				  //echo $result_row["csid"];
				  $tx=(explode(",",$result_row["csid"]));
				  
				  $stx="";
				  //echo count($tx);
                  if(count($tx)>1){
					  if(empty($tx[0]))
					   $stx="客戶:無  點餐人員:".$tx[1];
				      else
					   $stx="客戶:".$tx[0]." 點餐人員:".$tx[1];
				  }					  
                  else{
					  $stx="客戶:".$result_row["csid"];
				  }
						
				  echo $stx."<hr/>";
				  echo "<p>此單成立時間:".$result_row["listtime"]."</p><hr/>";
				  echo "<p>總價:".$result_row["sum"]."</p><hr/>";
				 //轉成陣列處理資料格式
			     $menu=(explode(",",$result_row["menu"]));
			     $number=(explode(",",$result_row["number"]));
			     $price=(explode(",",$result_row["price"]));
				 for($i=0;$i<count($menu);$i++){
				
				   echo "<p align=center>".$menu[$i]."*".$number[$i]."份  價格:".$number[$i]*$price[$i]." NT$</p><hr/>";
				   
				 
				 }
                  echo "<Button>修改</Button>";				 
				 echo "</td>";
				
				 echo "</tr>";
				 
			 }
        
             echo "</table>";


?>