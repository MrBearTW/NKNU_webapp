<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
$str["name"] = "星巴克";
$str["id"] = "S00001";
$str["addr"] = "高雄市";
$str["phone"] = "07-1234567";
//echo $str["id"];

$str2 = array("name" => "好市多", "id" => "S00002", "addr" => "台北市", "phone" => "0223456789");
print_r($str);

//變更
$str2["addr"] = "屏東";

//echo $str2["addr"];
foreach ($str2 as $v2) {
	echo $v2 . "<br>";
}
foreach ($str2 as $key => $v3) {
//	echo "$key 值為 $v3 " . "<br>";
}



?>
</body>
</html>