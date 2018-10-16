<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$b=stripos($user_agent,"windows NT");
if(isset($b) && $b!="")
	header("Location:index2.php");
else
	header("Location:index3.php");
?>