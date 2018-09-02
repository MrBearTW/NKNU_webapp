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
	歡迎到SQL Cafe!
	 </FONT>
<IMG SRC='dau.gif'>
         <BR><BR>
eof1;

print "<FONT size='5' COLOR='red'>";
for($i=1;$i<=15;$i=$i+1){
	print "＊";
}
print "<BR>";

$m[0]="　　　　　　您好";
$m[1]="　　　　　　早安";
$m[2]="　　　　　　午安";
$m[3]="　　　　　　晚安";

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
print "　　今天是".date("Y")."年".date("m")."月".date("j")."日。<BR>";
$i=1;
while($i<=15){
	print "＊";
	$i++;
}

print "</FONT>";
print "<HR><BR>";
print "您的IP位址是　　";
print getenv('REMOTE_ADDR');
print "<BR>";
print "您的主機名稱是　";
print gethostbyaddr(getenv('REMOTE_ADDR'));
print "<BR>";
print "您的瀏覽器是　　";
print getenv('HTTP_USER_AGENT');
print "<BR><HR>";

print "<FORM action='uke.php' method='post'>";
print "請傳送一個訊息過來吧！<BR>";
print "<INPUT TYPE='text' NAME='a'>";
print "<BR>";
print "<INPUT TYPE='submit' VALUE='傳送'>";
print "</FORM>";
print "<HR><A href='keizi_top.php'>按這裡回佈告欄首頁</A>";


?>