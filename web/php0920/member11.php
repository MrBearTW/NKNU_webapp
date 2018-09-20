<?php

require("conn.php");


$sql="select * from `member`";
$result=mysql_query($sql);

while($row_result=mysql_feach_row($result)){
	foreach($row_result as $item =>$value){
		echo $item."==".$value."<br/>";
		}
	}
/*
$link_db=mysql_select_db("customer");

if(!$link_db)
	
	die("資料庫連線錯誤！！");
	*/

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
</body>
</html>