<?php
session_start();

$_SESSION["stu"]["Sname"] = "澄清湖";
$_SESSION["stu"]["Sid"] = "st09527";
$_SESSION["stu"]["Saddr"] = "打狗";

echo $_SESSION["stu"]["Sname"] . " " . $_SESSION["stu"]["Sid"] . " " . $_SESSION["stu"]["Saddr"];
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