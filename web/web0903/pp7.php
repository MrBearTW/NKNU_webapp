<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
for($i=1;$i<=30;$i++){
	if(($i%2)==0){
		
		echo $i." ";		
		ob_flush();
		}else{
		ob_clean();
			}
}
ob_end_flush();
?>

</body>
</html>