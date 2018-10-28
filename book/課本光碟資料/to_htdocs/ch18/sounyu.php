<?php
$s=mysql_connect("localhost","root","1234") or die("連接失敗!");
print "連接成功!";
mysql_select_db("db1",$s);
mysql_query("INSERT INTO tb1 VALUES('K777','PHP太郎',20)");
mysql_close($s);
?>
