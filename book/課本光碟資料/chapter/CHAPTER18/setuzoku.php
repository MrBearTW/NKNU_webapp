<?php
$s=mysql_connect("localhost","root","1234") or die("連接失敗!");
print "連接成功!";
mysql_close($s);
?>
