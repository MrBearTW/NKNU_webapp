<?php
$m="107-0052";
if(preg_match("/^[0-9]{3}-[0-9]{4}$/",$m)){
	print "OK沒問題";
}else{
	print "有錯誤";
}
?>
