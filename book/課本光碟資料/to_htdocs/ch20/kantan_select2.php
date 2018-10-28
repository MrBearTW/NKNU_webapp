<?php
require_once("data/db_info.php");
$s=mysql_connect($SERV,$USER,$PASS) or die("連接失敗");
print "連接成功！<BR>";
mysql_select_db($DBNM);

$re=mysql_query("SELECT * FROM tbk ORDER BY bang");
while($kekka=mysql_fetch_array($re)){
	print $kekka[0];
	print " : ";
	print $kekka[1];
	print " : ";
	print $kekka[2];
	print "<BR>";
}
mysql_close($s);
print "<BR><A HREF='kantan2.html'>回到最上層選單</A>";
?>
