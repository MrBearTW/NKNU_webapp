<?php
$dateStr=date("Y-m-d 23:59:59"); //抓當天的最後一秒資料
//echo $dataStr;

if(isset($_COOKIE["counter"])){

$counter=$_COOKIE["counter"];

$counter++;

setcookie("counter",$counter,strtotime($dateStr));

}else{
	
	setcookie("counter","0",strtotime($dateStr));
	header("Location:counter.php");	
	
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php

echo "今日瀏覽次數：".$counter;

?>
</body>
</html>