<?php

/*************** Åª¨ú¸ê®Æ®w¸ê°T ***************/
require_once("data/db_info.php");

/*************** ³s±µ¸ê®Æ®w¡B¿ï¾Ü¸ê®Æ®w ***************/
$s=mysql_connect($SERV,$USER,$PASS) or die("³s±µ¥¢±Ñ");
mysql_select_db($DBNM);

/*************** Åã¥Ü¼ĞÃD¡B¹Ï®× ***************/
print <<<eot1
   <HTML>
      <HEAD>
         <META http-equiv="Content-Type" content="text/html;charset=Big5">
         <TITLE>SQL Cafeªººô­¶</TITLE>
      </HEAD>
      <BODY BGCOLOR="lightsteelblue">
         <IMG SRC="pic/oya.gif">
         <FONT SIZE="7" COLOR="indigo">
            Œ©³o¸Ì¬OSQL Cafe ¡ã
         </FONT>
         <BR><BR>
            i½ĞÂI«ö§A·Q¬İªº¥DÃDªº½s¸¹
         <HR>
         <FONT SIZE="5">
            i¡]¥DÃD¤@Äı¡^
         </FONT>
         <BR>
eot1;

/*************** ¨ú±o¥Î¤áºİªºIP ***************/
$ip=getenv("REMOTE_ADDR");

/*************** ¦b¥DÃDªº¼ĞÃD¤¤¡]su¡^¦pªG¦³¸ê®Æªº¸Ü¼g¤Jtbj0 ***************/
$su_d=htmlspecialchars($_GET["su"]);
if($su_d<>""){
   mysql_query("INSERT INTO tbj0 (sure,niti,aipi) VALUES ('$su_d',now(),'$ip')");
}

/*************** ´£¨útbj0ªº©Ò¦³¸ê®Æ ***************/
$re=mysql_query("SELECT * FROM tbj0");
while($kekka=mysql_fetch_array($re)){
print <<<eot2
	<A HREF="keizi.php?gu=$kekka[0]">$kekka[0]  $kekka[1]</A>
	<BR>
	$kekka[2]¸ê®Æ¦C¥Ü<BR><BR>
eot2;
}

/*************** ¤ÁÂ_¸ê®Æ®w ***************/
mysql_close($s);

/*************** Åã¥Ü¥DÃD¦WºÙ¿é¤JÄæ¦ì¡A¦^¨ì­º­¶µ¥³sµ² ***************/
print <<<eot3
         <HR>
         <FONT size="5">
            i¡]µoªí¥DÃD¡^
         </FONT>
         <BR>
	­nµoªí·sªº¥DÃD¡A½Ğ¨Ó³o¸Ì¡I
         <BR>
         <FORM METHOD="GET" ACTION="keizi_top.php">
	·s¥DÃDªº¼ĞÃD
            <INPUT TYPE='text' NAME='su' SIZE='50'>
            <BR>
            <INPUT TYPE="submit" VALUE="µoªí">
         </FORM>
         <HR>
         <FONT SIZE="5">
	¡]°T®§·j´M¡^
         </FONT>
         <A HREF="keizi_search.php">ÂI³o¸Ì¶i¦æ·j´M</a>
	 <HR>
      </BODY>
   </HTML>
eot3;

?>