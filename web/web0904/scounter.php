<?php

session_start();

if(!isset($_SESSION["SOK"])){
$dateStr=date("Y-m-d 23:59:59");

if(isset($_COOKIE["counter"])){

$counter=$_COOKIE["counter"];

$counter++;

setcookie("counter",$counter,strtotime($dateStr));

}else{
	
	setcookie("counter","0",strtotime($dateStr));
	header("Location:counter.php");	
	
	}
	
   $_SESSION["SOK"]=1;
   	
}else{
	
	$counter=$_COOKIE["counter"];
	
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