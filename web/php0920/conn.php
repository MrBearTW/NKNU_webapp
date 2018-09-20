<?php

$local="localhost";
$user="sp1";
$pwd="sp1";

header("Content-Type:text/html;charset=utf-8");

$link_serv=mysql_connect($local,$user,$pwd);
mysql_query("set character set utf8");



/*
if(!$link_serv){
	
	echo "MYSQL連線錯誤!!";
	
	}
*/

if(!$link_serv)
	
	die("資料權限錯誤！！");
	

$link_db=mysql_select_db("customer");

if(!$link_db)
	
	die("資料庫連線錯誤！！");


	

?>