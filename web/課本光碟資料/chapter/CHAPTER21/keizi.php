<?php

/************** 讀取資料庫資訊 ***************/
require_once("data/db_info.php");

/************** 連接資料庫、選擇資料庫 **************/
$s=mysql_connect($SERV,$USER,$PASS) or die("連接失敗");
mysql_select_db($DBNM);

/************** 取得主題的群組編號（gu）並且代入$gu_d **************/
$gu_d=$_GET["gu"];

/************** 如果$gu_d含有數字以外的內容就停止處理 **************/
if(preg_match("/[^0-9]/",$gu_d)){
print <<<eot1
	輸入的值不正確<BR>
	<A HREF="keizi_top.php">點這裡回到主題總覽頁面</A>
eot1;

/************** $gu_d並未含有數字以外的內容，正常處理 **************/
}elseif(preg_match("/[0-9]/",$gu_d)){

/************** 取得名字與訊息後將標題刪除 **************/
$na_d= htmlspecialchars($_GET["na"]);
$me_d= htmlspecialchars($_GET["me"]);

/************** 取得IP位址 **************/
$ip=getenv("REMOTE_ADDR");

/************** 顯示符合主題群組編號（gu）的記錄 **************/
$re=mysql_query("SELECT sure FROM tbj0 WHERE guru=$gu_d");
$kekka=mysql_fetch_array($re);

/************** 製作主題內容的字串$sure_com **************/
$sure_com="「".$gu_d." ".$kekka[0]."」";

/************** 輸出主題顯示的標題等資訊 **************/
print <<<eot2
  <HTML>
      <HEAD>
         <META http-equiv="Content-Type" content="text/html;charset=Big5">
         <TITLE>SQL Cafe $sure_com 主題</TITLE>
      </HEAD>
      <BODY BGCOLOR="darkgray">
         <FONT SIZE="7" COLOR="indigo">
	$sure_com 主題！
         </FONT>
         <BR><BR>
         <FONT SIZE="5">
	$sure_com 的訊息
         </FONT>
         <BR>
eot2;

/************** 如果沒有輸入名字（$na_d）的話將記錄寫入tbj1 **************/
if($na_d<>""){
   mysql_query("INSERT INTO tbj1 VALUES (0,'$na_d','$me_d',now(),$gu_d,'$ip')");
}

/************** 顯示水平線 **************/
print "<HR>";

/************** 依照日期順序顯示回應資料 **************/
$re=mysql_query("SELECT * FROM tbj1 WHERE guru=$gu_d ORDER BY niti");


$i=1;
while($kekka=mysql_fetch_array($re)){

print "$i($kekka[0]):<U>$kekka[1]</U>:$kekka[3] <BR>";
print nl2br($kekka[2]);
print "<BR><BR>";
	$i++;
}

/************** 切斷資料庫 **************/
mysql_close($s);

print <<<eot3
   <HR>
   <FONT SIZE="5">
       在 $sure_com 中寫訊息的時候請來這裡
   </FONT>
   <FORM METHOD="GET" ACTION="keizi.php">
	名稱 <INPUT TYPE="text" NAME="na"><BR>
	訊息 <BR>
      <TEXTAREA NAME="me" ROWS="10" COLS="70"></TEXTAREA>
         <BR>
      <INPUT TYPE="hidden" NAME="gu" VALUE=$gu_d>
      <INPUT TYPE="submit" VALUE="傳送">
   </FORM>
      <HR>
   <A HREF="keizi_top.php">回到主題總覽</A>
   </BODY>
   </HTML>
eot3;

/************** 在$gu_d中含有數字以外的內容，或是沒有數字的時候進行的處理 **************/
}else{
   print "請選擇主題<BR>";
   print "<A HREF='keizi_top.php'>點這裡回到主題總覽頁</A>";
}

?>
