<?php

/************** Ū����Ʈw��T ***************/
require_once("data/db_info.php");

/************** �s����Ʈw�B��ܸ�Ʈw **************/
$s=mysql_connect($SERV,$USER,$PASS) or die("�s������");
mysql_select_db($DBNM);

/************** ���o�D�D���s�սs���]gu�^�åB�N�J$gu_d **************/
$gu_d=$_GET["gu"];

/************** �p�G$gu_d�t���Ʀr�H�~�����e�N����B�z **************/
if(preg_match("/[^0-9]/",$gu_d)){
print <<<eot1
	��J���Ȥ����T<BR>
	<A HREF="keizi_top.php">�I�o�̦^��D�D�`������</A>
eot1;

/************** $gu_d�å��t���Ʀr�H�~�����e�A���`�B�z **************/
}elseif(preg_match("/[0-9]/",$gu_d)){

/************** ���o�W�r�P�T����N���D�R�� **************/
$na_d= htmlspecialchars($_GET["na"]);
$me_d= htmlspecialchars($_GET["me"]);

/************** ���oIP��} **************/
$ip=getenv("REMOTE_ADDR");

/************** ��ܲŦX�D�D�s�սs���]gu�^���O�� **************/
$re=mysql_query("SELECT sure FROM tbj0 WHERE guru=$gu_d");
$kekka=mysql_fetch_array($re);

/************** �s�@�D�D���e���r��$sure_com **************/
$sure_com="�u".$gu_d." ".$kekka[0]."�v";

/************** ��X�D�D��ܪ����D����T **************/
print <<<eot2
  <HTML>
      <HEAD>
         <META http-equiv="Content-Type" content="text/html;charset=Big5">
         <TITLE>SQL Cafe $sure_com �D�D</TITLE>
      </HEAD>
      <BODY BGCOLOR="darkgray">
         <FONT SIZE="7" COLOR="indigo">
	$sure_com �D�D�I
         </FONT>
         <BR><BR>
         <FONT SIZE="5">
	$sure_com ���T��
         </FONT>
         <BR>
eot2;

/************** �p�G�S����J�W�r�]$na_d�^���ܱN�O���g�Jtbj1 **************/
if($na_d<>""){
   mysql_query("INSERT INTO tbj1 VALUES (0,'$na_d','$me_d',now(),$gu_d,'$ip')");
}

/************** ��ܤ����u **************/
print "<HR>";

/************** �̷Ӥ��������ܦ^����� **************/
$re=mysql_query("SELECT * FROM tbj1 WHERE guru=$gu_d ORDER BY niti");


$i=1;
while($kekka=mysql_fetch_array($re)){

print "$i($kekka[0]):<U>$kekka[1]</U>:$kekka[3] <BR>";
print nl2br($kekka[2]);
print "<BR><BR>";
	$i++;
}

/************** ���_��Ʈw **************/
mysql_close($s);

print <<<eot3
   <HR>
   <FONT SIZE="5">
       �b $sure_com ���g�T�����ɭԽШӳo��
   </FONT>
   <FORM METHOD="GET" ACTION="keizi.php">
	�W�� <INPUT TYPE="text" NAME="na"><BR>
	�T�� <BR>
      <TEXTAREA NAME="me" ROWS="10" COLS="70"></TEXTAREA>
         <BR>
      <INPUT TYPE="hidden" NAME="gu" VALUE=$gu_d>
      <INPUT TYPE="submit" VALUE="�ǰe">
   </FORM>
      <HR>
   <A HREF="keizi_top.php">�^��D�D�`��</A>
   </BODY>
   </HTML>
eot3;

/************** �b$gu_d���t���Ʀr�H�~�����e�A�άO�S���Ʀr���ɭԶi�檺�B�z **************/
}else{
   print "�п�ܥD�D<BR>";
   print "<A HREF='keizi_top.php'>�I�o�̦^��D�D�`����</A>";
}

?>
