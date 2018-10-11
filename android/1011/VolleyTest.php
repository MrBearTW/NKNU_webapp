<?php
$host='127.0.0.1';
$name='sp1';
$pwd='sp1';
$db='school';

$con=mysqli_connect($host, $name, $pwd, $db) or die("No Connection!");
mysqli_set_charset($con,"UTF8");
header("Content-Type:text/html; charset=utf-8");

$result=mysqli_query($con, "SELECT * FROM student");
while($row=mysqli_fetch_assoc($result)){
	$tmp[]=$row;
}
echo json_encode(array("data"=>$tmp));
mysqli_close($con);

?>