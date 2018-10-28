<FORM ACTION="radio_uke.php" METHOD="post">
選擇你的年齡，然後按下傳送按鈕<BR>
<?php
$i=1;
$c=1;
while($i<=100){
print "<INPUT TYPE='radio' NAME='r' VALUE='$i'>$i  ";
   if($c==10){
      print "<BR>";
      $c=0;
   }
$i++;
$c++;
}
?>
<INPUT TYPE="submit" VALUE="傳送">
</FORM>
