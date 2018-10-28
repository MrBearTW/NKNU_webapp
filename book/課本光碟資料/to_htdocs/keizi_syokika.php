<?php
require_once("data/db_info.php");
$s=mysql_connect($SERV,$USER,$PASS) or die("連接失敗");

mysql_select_db($DBNM);

mysql_query("DELETE FROM tbj0");
mysql_query("DELETE FROM tbj1");
mysql_query("ALTER TABLE tbj0 AUTO_INCREMENT=0");
mysql_query("ALTER TABLE tbj1 AUTO_INCREMENT=0");

print "SQL Cafe的資料表重設好了";

mysql_close($s);

?>
