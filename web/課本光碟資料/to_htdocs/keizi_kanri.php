<?php

/************** Ū����Ʈw��T **************/
require_once("data/db_info.php");

/************** �s����Ʈw�B��ܸ�Ʈw **************/
$s=mysql_connect($SERV,$USER,$PASS) or die("�s������");
mysql_select_db($DBNM);

/************** SELECT��ƪ�tbj1 **************/
$re=mysql_query("SELECT * FROM tbj1 ORDER BY niti");

/************** ��X�d�ߪ����G **************/
$i=1;
while($kekka=mysql_fetch_array($re)){
print "$i($kekka[0]):$kekka[1]:$kekka[3] GP:$kekka[4] IP:$kekka[5]<BR>";
print nl2br($kekka[2]);
print "<BR><BR>";
	$i++;
}

/************** ���_��Ʈw **************/
mysql_close($s);
?>
