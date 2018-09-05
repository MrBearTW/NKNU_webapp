<?php
$Sid = $_POST["Sid"];
$Spwd = $_POST["Spwd"];

if ($Sid == "sa001" and $Spwd == "sa001") {
	header("Location:student.php?Id=sa001&Pwd=sa001");
	//
} else {
	//echo "xxxx";
	header("Location:slogin.php?Res=Nono");
}
?>