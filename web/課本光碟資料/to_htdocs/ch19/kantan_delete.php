<?php
$s=mysql_connect("localhost","root","1234") or die("連接失敗");
print "連接成功！<BR>";
mysql_select_db("db1");
$b1_d=$_POST["b1"];
mysql_query("DELETE FROM tbk WHERE bang=$b1_d");
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
print "<BR><A HREF='kantan.html'>回到最上層選單</A>";
?>
