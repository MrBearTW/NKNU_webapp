<?php
print <<<eof1
   <HTML>
      <HEAD>
         <TITLE>SQL Cafe</TITLE>
      </HEAD>
      <BODY BGCOLOR="cyan">

       <BR>
        <BR>
	<FONT SIZE="7" COLOR="indigo">
	�w���SQL Cafe!
	 </FONT>
<IMG SRC='dau.gif'>
         <BR><BR>
eof1;

print "<FONT size='5' COLOR='red'>";
for($i=1;$i<=15;$i=$i+1){
	print "��";
}
print "<BR>";

$m[0]="�@�@�@�@�@�@�z�n";
$m[1]="�@�@�@�@�@�@���w";
$m[2]="�@�@�@�@�@�@�Ȧw";
$m[3]="�@�@�@�@�@�@�ߦw";

if (date("G")>=18){
	print $m[3];
}elseif(date("G")>=9){
	print $m[2];
}elseif(date("G")>=6){
	print $m[1];
}else{
	print $m[0];
}
print "<BR>";
print "�@�@���ѬO".date("Y")."�~".date("m")."��".date("j")."��C<BR>";
$i=1;
while($i<=15){
	print "��";
	$i++;
}

print "</FONT>";
print "<HR><BR>";
print "�z��IP��}�O�@�@";
print getenv('REMOTE_ADDR');
print "<BR>";
print "�z���D���W�٬O�@";
print gethostbyaddr(getenv('REMOTE_ADDR'));
print "<BR>";
print "�z���s�����O�@�@";
print getenv('HTTP_USER_AGENT');
print "<BR><HR>";

print "<FORM action='uke.php' method='post'>";
print "�жǰe�@�ӰT���L�ӧa�I<BR>";
print "<INPUT TYPE='text' NAME='a'>";
print "<BR>";
print "<INPUT TYPE='submit' VALUE='�ǰe'>";
print "</FORM>";
print "<HR><A href='keizi_top.php'>���o�̦^�G�i�歺��</A>";


?>