
  <?php
  /*
$filename=fopen("txt0906.txt","w+");
fwrite($filename,"寫不進去就GG了！！");
fwrite($filename,"寫不進去就GG了！！");
fwrite($filename,"寫不進去就GG了！！");
fwrite($filename,"寫不進去就GG了！！");
fwrite($filename,"寫不進去就GG了！！");
readfile("txt0906.txt");
*/



header("Content-Type:image/jpg");
$filename2=fopen("v1.jpg","rb");
$content2=fread($filename2,filesize("v1.jpg"));

echo $filesize("v1.jpg");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<p>


</body>
</html>