<?php

/*************** ��Ʈw�s���B��Ʈw��� ***************/
$s=mysql_connect("localhost","root","1234") or die("�s������");
mysql_select_db("db1",$s);

/*************** NAME�Nh��VALUE�N�J�ܼ�$h_d ****************/
$h_d=$_POST["h"];

/*************** $h_d����sel, ins, del, ser�|�ӱ��� ***************/
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

/*************** ��ܬd�ߵ��G ***************/
while($kekka=mysql_fetch_array($re)){
	print $kekka[0];
	print " : ";
	print $kekka[1];
	print " : ";
	print $kekka[2];
	print "<BR>";
}

/*************** ���_��Ʈw ***************/
mysql_close($s);

/*************** �^�쭺�����s�� ***************/
print "<BR><A HREF='kantan2.html'>�^��̤W�h���</A>";
?>
