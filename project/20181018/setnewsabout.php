<?php
session_start();
if(isset($_SESSION["flags"])){
 if($_SESSION["flags"]==0 OR !isset($_SESSION["flags"])){
	header("Location:index2.php");
 }
}

?>

<!DOCTYPE html>
<head>
<title>餐餐自由配點餐  管理主台</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="setnewsabout.js"></script>
<link rel="stylesheet" type="text/css" href="setnewabout.css">
</head>
<body>

<div class="topnav">
  <?php
    echo "<a>目前登入人員:".$_SESSION["userinputcode"]."</a>";
  ?>
  <a onclick="ca(0)">管理人員</a>
  <a onclick="ca(1)">管理食品</a>
  <a onclick="ca(2)">管理消息</a>
  <a onclick="ca(3)">管理訂單</a>
  <a href="normalpage.php">返回訂餐</a>
  <a onclick="ca(4)">登出</a>
</div>

<div class="b1" id="b1">
 
</div>


</body>
</html>