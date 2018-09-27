<?php

$link_server="localhost";
$link_user="sp1";
$link_pwd="sp1";


$link_server=mysql_connect($link_server,$link_user,$link_pwd);

if(!$link_server) die("伺服器連線失敗！！");


mysql_query("SET NAMES  'utf8'");



?>
