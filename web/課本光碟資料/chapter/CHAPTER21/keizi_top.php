<?php

/*************** 讀取資料庫資訊 ***************/
require_once("data/db_info.php");

/*************** 連接資料庫、選擇資料庫 ***************/
$s=mysql_connect($SERV,$USER,$PASS) or die("連接失敗");
mysql_select_db($DBNM);

/*************** 顯示標題、圖案 ***************/
print <<<eot1
   <HTML>
      <HEAD>
         <META http-equiv="Content-Type" content="text/html;charset=Big5">
         <TITLE>SQL Cafe的網頁</TITLE>
      </HEAD>
      <BODY BGCOLOR="lightsteelblue">
         <IMG SRC="pic/oya.gif">
         <FONT SIZE="7" COLOR="indigo">
            �底o裡是SQL Cafe ∼
         </FONT>
         <BR><BR>
            �i請點按你想看的主題的編號
         <HR>
         <FONT SIZE="5">
            �i（主題一覽）
         </FONT>
         <BR>
eot1;

/*************** 取得用戶端的IP ***************/
$ip=getenv("REMOTE_ADDR");

/*************** 在主題的標題中（su）如果有資料的話寫入tbj0 ***************/
$su_d=htmlspecialchars($_GET["su"]);
if($su_d<>""){
   mysql_query("INSERT INTO tbj0 (sure,niti,aipi) VALUES ('$su_d',now(),'$ip')");
}

/*************** 提取tbj0的所有資料 ***************/
$re=mysql_query("SELECT * FROM tbj0");
while($kekka=mysql_fetch_array($re)){
print <<<eot2
	<A HREF="keizi.php?gu=$kekka[0]">$kekka[0]  $kekka[1]</A>
	<BR>
	$kekka[2]資料列示<BR><BR>
eot2;
}

/*************** 切斷資料庫 ***************/
mysql_close($s);

/*************** 顯示主題名稱輸入欄位，回到首頁等連結 ***************/
print <<<eot3
         <HR>
         <FONT size="5">
            �i（發表主題）
         </FONT>
         <BR>
	要發表新的主題，請來這裡！
         <BR>
         <FORM METHOD="GET" ACTION="keizi_top.php">
	新主題的標題
            <INPUT TYPE='text' NAME='su' SIZE='50'>
            <BR>
            <INPUT TYPE="submit" VALUE="發表">
         </FORM>
         <HR>
         <FONT SIZE="5">
	（訊息搜尋）
         </FONT>
         <A HREF="keizi_search.php">點這裡進行搜尋</a>
	 <HR>
      </BODY>
   </HTML>
eot3;

?>