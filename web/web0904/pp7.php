<?php
class Supply{
	var $Supna;
	var $Supid;
	var $ppro;
}

class Book extends Supply{
	var $title;
	var $bid;
	var $cat;
	var $pub;
	var $price;
	function getPage($pp){
		return $pp+2;
		}
	}

$pages1=new Book();
$pages1->title="身為一個專業的碼農";
$pages1->bid="IT9527";
$pages1->cat="程式設計";
$pages1->pub="熊熊出版社";
$pages1->price=5566;
$totalp = $pages1->getPage(100);
$page1p->ppro=10000;

echo $totalp;
echo $page1p;

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