<?php
header("Content-type:text/html");

$loc='C';

switch($loc){
	
	case 'A':
	
	header("Location:http://tw.yahoo.com/");
	
	break;
	
	case 'B':

	header("Location:http://www.google.com.tw");
	
	break;	
	
	case 'C':
	
		header("Location:http://www.youtube.com");
	
	break;

	case 'D':

	header("Location:http://www.facebook.com.tw");

	break;	
	
	
	default:
	
	echo "哈樓哈！！";
	
	break;

	}




?>