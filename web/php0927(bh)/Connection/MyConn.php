<?php

$link_server="sql301.byethost.com";
$link_user="b3_22592589";
$link_pwd="mrbeartw9";


$link_server=mysql_connect($link_server,$link_user,$link_pwd);

if(!$link_server) die("伺服器連線失敗！！");


mysql_query("SET NAMES  'utf8'");



?>
