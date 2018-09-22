<?php

require("conn.php");

$sql="select * from `cu_detail`";
$result=mysql_query($sql);

$row_result=mysql_data_seek($result,3);  //找出特定的一列


//while($row_result=mysql_fetch_row($result)){
while($row_result=mysql_fetch_assoc($result)){
//while($row_result=mysql_fetch_array($result)){
	
foreach($row_result as $item=>$value){		
	echo $item."==".$value."<br/>";			
	}	
}


$nums=mysql_num_rows($result);  //計算選出的數量
//echo $nums;


?>