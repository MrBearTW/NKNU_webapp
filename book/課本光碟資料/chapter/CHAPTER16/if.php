<?php
if (date("G")>=18){
	print "晚安";
}elseif(date("G")>=9){
	print "午安";
}elseif(date("G")>=6){
	print "早安";
}else{
	print "不想睡覺嗎？";
}
?>
