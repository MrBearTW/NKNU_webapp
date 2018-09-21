<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php

/*
$str1="晚上6點多，棧道還是好多人，2018補捉這紅色與藍色微妙的交織過程";
$str2="A small village on the southern coast of New Zealand is planning to implement a radical plan to protect its native wildlife";

echo $str1;
echo "<br>==============================================<br>";
//echo chunk_split($str2,4);
*/
/*
$too=strtok($str2," ");

while($too){
	
	echo "$too <br>";
	
	$too=strtok(" ");
	
	}

*/

/*

$loc1="高雄市苓雅區和平2路1387號";
$loc2="A small village on the southern coast";

$snum=strpos($loc2,"on");

echo $snum;

*/

$fname=array("photo.jpg","note.txt","web3.html","sqo.mp4");
$ptname=array(".jpg"=>"影像檔",".txt"=>"文字檔","html"=>"網頁檔","mg4"=>"視訊檔");


foreach($fname as $val){
	
$ft=strstr($val ,".");

//echo $ft;

foreach($ptname as $na=>$desc){
	
	
	if($na==$ft){
		
	echo $val."類型是".$desc."<br>";
		
		}
	
	}

}

?>




</body>
</html>