<?php

/*************** Ū����Ʈw��T ***************/
require_once("data/db_info.php");

/*************** �s����Ʈw�B��ܸ�Ʈw ***************/
$s=mysql_connect($SERV,$USER,$PASS) or die("�s������");
mysql_select_db($DBNM);

/*************** ��ܼ��D�B�Ϯ� ***************/
print <<<eot1
   <HTML>
      <HEAD>
         <META http-equiv="Content-Type" content="text/html;charset=Big5">
         <TITLE>SQL Cafe������</TITLE>
      </HEAD>
      <BODY BGCOLOR="lightsteelblue">
         <IMG SRC="pic/oya.gif">
         <FONT SIZE="7" COLOR="indigo">
            ���o�̬OSQL Cafe ��
         </FONT>
         <BR><BR>
            �i���I���A�Q�ݪ��D�D���s��
         <HR>
         <FONT SIZE="5">
            �i�]�D�D�@���^
         </FONT>
         <BR>
eot1;

/*************** ���o�Τ�ݪ�IP ***************/
$ip=getenv("REMOTE_ADDR");

/*************** �b�D�D�����D���]su�^�p�G����ƪ��ܼg�Jtbj0 ***************/
$su_d=htmlspecialchars($_GET["su"]);
if($su_d<>""){
   mysql_query("INSERT INTO tbj0 (sure,niti,aipi) VALUES ('$su_d',now(),'$ip')");
}

/*************** ����tbj0���Ҧ���� ***************/
$re=mysql_query("SELECT * FROM tbj0");
while($kekka=mysql_fetch_array($re)){
print <<<eot2
	<A HREF="keizi.php?gu=$kekka[0]">$kekka[0]  $kekka[1]</A>
	<BR>
	$kekka[2]��ƦC��<BR><BR>
eot2;
}

/*************** ���_��Ʈw ***************/
mysql_close($s);

/*************** ��ܥD�D�W�ٿ�J���A�^�쭺�����s�� ***************/
print <<<eot3
         <HR>
         <FONT size="5">
            �i�]�o��D�D�^
         </FONT>
         <BR>
	�n�o��s���D�D�A�Шӳo�̡I
         <BR>
         <FORM METHOD="GET" ACTION="keizi_top.php">
	�s�D�D�����D
            <INPUT TYPE='text' NAME='su' SIZE='50'>
            <BR>
            <INPUT TYPE="submit" VALUE="�o��">
         </FORM>
         <HR>
         <FONT SIZE="5">
	�]�T���j�M�^
         </FONT>
         <A HREF="keizi_search.php">�I�o�̶i��j�M</a>
	 <HR>
      </BODY>
   </HTML>
eot3;

?>