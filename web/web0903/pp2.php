<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
$ary1[]="姜梓新";
$ary1[]="劉尚恩";
$ary1[]="王冠逸";
//echo $ary1[0];
foreach($ary1 as $val){
//	echo $val;
	}


$ary2=array("珍珠","翡翠","明玉");

//echo $ary2[0];

for($i=0;$i<count($ary2);$i++){
//echo $ary2[$i]."<br/>";
}

$ary3=[9,4,8,7,5,5,6,6];
$a3a=0;
//用for相加
//for($i=0;$i<count($ary3);$i++){
//$a3a+=$ary3[$i];
//}

//用foreach相加
foreach($ary3 as $v3){
$a3a+=$ary3[$i];
	}
echo $a3a;

?>
</body>
</html>