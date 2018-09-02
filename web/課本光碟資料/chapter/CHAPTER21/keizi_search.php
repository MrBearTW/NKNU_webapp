<?php

/************** 讀取資料庫資訊 **************/
require_once("data/db_info.php");

/************** 連接資料庫、選擇資料庫 **************/
$s=mysql_connect($SERV,$USER,$PASS) or die("連接失敗");
mysql_select_db($DBNM);

/************** 標題的顯示 **************/
print <<<eot1
   <HTML>
      <HEAD>
         <META http-equiv="Content-Type" content="text/html;charset=Big5">
         <TITLE>SQL Cafe 的搜尋頁面</TITLE>
      </HEAD>
      <BODY BGCOLOR="orange">
         <HR>
         <FONT SIZE="5">
	（搜尋結果在此）
         </FONT>
         <BR>
eot1;

/************** 取得搜尋字串後刪除標籤 **************/
$se_d=htmlspecialchars($_GET["se"]);

/************** 搜尋字串（$se_d）中如果有資料的話就進行搜尋 **************/
if($se_d<>""){

/************** 搜尋的SQL語法  在資料表tbj1中結合tbj0 **************/
$str=<<<eot2
   SELECT tbj1.bang,tbj1.nama,tbj1.mess,tbj0.sure
      FROM tbj1 
   JOIN tbj0 
   ON
      tbj1.guru=tbj0.guru 
   WHERE tbj1.mess LIKE "%$se_d%"
eot2;

/************** 執行搜尋查詢 **************/
   $re=mysql_query($str);
   while($kekka=mysql_fetch_array($re)){
      print " $kekka[0] : $kekka[1] : $kekka[2] ( $kekka[3] )";
      print "<BR><BR>";
   }
}

/************** 切斷資料庫 **************/
mysql_close($s);

/************** 顯示輸入搜尋字串用的表單，回到首頁的連結 **************/
print <<<eot3
   <HR>
	請在這裡輸入訊息中包含的文字！
   <BR>
      <FORM METHOD="GET" ACTION="keizi_search.php">
	搜尋字串
         <INPUT TYPE="text" NAME="se">
         <BR>
         <INPUT TYPE="submit" VALUE="搜尋">
      </FORM>
   <BR>
      <A HREF="keizi_top.php">
	回到主題總覽
      </A>
   </BODY>
   </HTML>
eot3;
?>
