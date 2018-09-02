<?php

/*************** 資料庫連結、資料庫選擇 ***************/
$s=mysql_connect("localhost","root","1234") or die("連接失敗");
mysql_select_db("db1",$s);

/*************** NAME將h的VALUE代入變數$h_d ****************/
$h_d=$_POST["h"];

/*************** $h_d分成sel, ins, del, ser四個條件 ***************/
switch("$h_d"){
	case "sel":
		$re=mysql_query("SELECT * FROM tbk ORDER BY bang");
		break;
	case "ins":
		$a1_d=$_POST["a1"];
		$a2_d= $_POST["a2"];
		mysql_query("INSERT INTO tbk (nama,mess) VALUES ('$a1_d','$a2_d')");
		$re=mysql_query("SELECT * FROM tbk ORDER BY bang");
		break;
	case "del":
		$b1_d=$_POST["b1"];
		mysql_query("DELETE FROM tbk WHERE bang=$b1_d");
		$re=mysql_query("SELECT * FROM tbk ORDER BY bang");
		break;
	case "ser":
		$c1_d=$_POST["c1"];
		$re=mysql_query("SELECT * FROM tbk WHERE mess LIKE '%$c1_d%' ORDER BY bang");
		break;
}

/*************** 顯示查詢結果 ***************/
while($kekka=mysql_fetch_array($re)){
	print $kekka[0];
	print " : ";
	print $kekka[1];
	print " : ";
	print $kekka[2];
	print "<BR>";
}

/*************** 中斷資料庫 ***************/
mysql_close($s);

/*************** 回到首頁的連結 ***************/
print "<BR><A HREF='kantan2.html'>回到最上層選單</A>";
?>
