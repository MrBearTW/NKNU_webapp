<?php
session_start();

$_SESSION["stu"]["Sname"]="李澎澎";
$_SESSION["stu"]["Sid"]="st00015";
$_SESSION["stu"]["Saddr"]="高雄市";

echo $_SESSION["stu"]["Sname"]." ".$_SESSION["stu"]["Sid"]." ".$_SESSION["stu"]["Saddr"] ;
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