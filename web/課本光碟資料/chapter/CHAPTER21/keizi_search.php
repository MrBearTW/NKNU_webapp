<?php

/************** Ū����Ʈw��T **************/
require_once("data/db_info.php");

/************** �s����Ʈw�B��ܸ�Ʈw **************/
$s=mysql_connect($SERV,$USER,$PASS) or die("�s������");
mysql_select_db($DBNM);

/************** ���D����� **************/
print <<<eot1
   <HTML>
      <HEAD>
         <META http-equiv="Content-Type" content="text/html;charset=Big5">
         <TITLE>SQL Cafe ���j�M����</TITLE>
      </HEAD>
      <BODY BGCOLOR="orange">
         <HR>
         <FONT SIZE="5">
	�]�j�M���G�b���^
         </FONT>
         <BR>
eot1;

/************** ���o�j�M�r���R������ **************/
$se_d=htmlspecialchars($_GET["se"]);

/************** �j�M�r��]$se_d�^���p�G����ƪ��ܴN�i��j�M **************/
if($se_d<>""){

/************** �j�M��SQL�y�k  �b��ƪ�tbj1�����Xtbj0 **************/
$str=<<<eot2
   SELECT tbj1.bang,tbj1.nama,tbj1.mess,tbj0.sure
      FROM tbj1 
   JOIN tbj0 
   ON
      tbj1.guru=tbj0.guru 
   WHERE tbj1.mess LIKE "%$se_d%"
eot2;

/************** ����j�M�d�� **************/
   $re=mysql_query($str);
   while($kekka=mysql_fetch_array($re)){
      print " $kekka[0] : $kekka[1] : $kekka[2] ( $kekka[3] )";
      print "<BR><BR>";
   }
}

/************** ���_��Ʈw **************/
mysql_close($s);

/************** ��ܿ�J�j�M�r��Ϊ����A�^�쭺�����s�� **************/
print <<<eot3
   <HR>
	�Цb�o�̿�J�T�����]�t����r�I
   <BR>
      <FORM METHOD="GET" ACTION="keizi_search.php">
	�j�M�r��
         <INPUT TYPE="text" NAME="se">
         <BR>
         <INPUT TYPE="submit" VALUE="�j�M">
      </FORM>
   <BR>
      <A HREF="keizi_top.php">
	�^��D�D�`��
      </A>
   </BODY>
   </HTML>
eot3;
?>
