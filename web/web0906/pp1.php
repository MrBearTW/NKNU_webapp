<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
/*
$str="2018-9-6 11:06:30";

sscanf($str,"%d-%d-%d %d:%d:%d",$y,$m,$d,$h,$i,$s);

echo $i;
*/
$str2="2018-9-6 11:06:30";
$timestamp=strtotime($str2);
$d1=date("Y-m-d",$timestamp);
$d2=date("Y-m-d",strtotime("-30 year",$timestamp));

echo $d1;
echo "30年前今天是:".$d2;
?>
</body>
</html>