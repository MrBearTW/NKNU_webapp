<?php

$date=time()+1000;

setcookie("ItemName","sp",$date);

echo $_COOKIE["ItemName"];



?>