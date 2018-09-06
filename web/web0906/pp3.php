<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>

<?php
/*
$filename=fopen("test0906.txt","w+");
fwrite($filename,"寫進去666！！");
readfile("test0906.txt")
*/

$filename2=fopen("images/star.png","rb");
$content2=fread($filename2,filesize("images/star.png"));
//header('Content-Type:image/png');


?>
</body>
</html>