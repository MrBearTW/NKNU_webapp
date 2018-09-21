<?php


$dateStr=date("Y-m-d 23:59:59");


if(isset($_COOKIE["counter"])){

$counter=$_COOKIE["counter"];

$counter++;

setcookie("counter",$counter,"");

}else{
	
	setcookie("counter","0","");
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