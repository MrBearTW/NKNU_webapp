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




$page1=new Book();
$page1->title="黑暗的程式設計課";
$page1->bid="bk0001";
$page1->cat="黑魔法類";
$page1->pub="澎澎出版社";
$page1->price=2500;
$totalp=$page1->getPage(500);
$page1->ppro=10000;


echo $totalp;
$this->title;

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