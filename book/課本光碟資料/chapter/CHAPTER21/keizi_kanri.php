<?php

/************** 讀取資料庫資訊 **************/
require_once("data/db_info.php");

/************** 連接資料庫、選擇資料庫 **************/
$s=mysql_connect($SERV,$USER,$PASS) or die("連接失敗");
mysql_select_db($DBNM);

/************** SELECT資料表tbj1 **************/
$re=mysql_query("SELECT * FROM tbj1 ORDER BY niti");

/************** 輸出查詢的結果 **************/
$i=1;
while($kekka=mysql_fetch_array($re)){
print "$i($kekka[0]):$kekka[1]:$kekka[3] GP:$kekka[4] IP:$kekka[5]<BR>";
print nl2br($kekka[2]);
print "<BR><BR>";
	$i++;
}

/************** 切斷資料庫 **************/
mysql_close($s);
?>
