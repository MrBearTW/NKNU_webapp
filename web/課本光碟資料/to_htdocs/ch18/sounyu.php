<?php
$s=mysql_connect("localhost","root","1234") or die("�s������!");
print "�s�����\!";
mysql_select_db("db1",$s);
mysql_query("INSERT INTO tb1 VALUES('K777','PHP�ӭ�',20)");
mysql_close($s);
?>
