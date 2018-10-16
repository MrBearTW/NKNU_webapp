<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>餐餐自由配點餐</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="normalpagecss.css">
<script src="normalpagescript.js"></script>
</head>
<body>

<div class="header">
  <h1>餐餐自由配</h1>
</div>


<div class="topnav">
	
	<a href="index.php">登出</a>
	
	<?php
	    if(isset($_SESSION["userinputcode"]) && isset($_SESSION["flags"])){
		  if($_SESSION["flags"]==1){
	          echo "<a href='readmenulist.php'>觀看</a>";
	          echo "<a href='readmenulist.php'>管理</a>";
	      }
		  else
			 echo "<a href='readmenulist.php'>觀看</a>";
	    }
     ?>
</div>

<div class="topnav">
	
	<?php
	    if(isset($_SESSION["userinputcode"]) && isset($_SESSION["flags"])){
			
		  if($_SESSION["flags"]==1){
			echo "<a>點餐店員:</a><h4 id=username1>".$_SESSION["userinputcode"]."</h4>";
			echo "<input id=getusercode type=text />";
			echo "<Button id=setcustomer onclick='setcustomer()'>客戶號碼</Button>";
		  }	
		
		    else{
			
			 echo "<a>使用者:</a><h4 id=username1>".$_SESSION["userinputcode"]."</h4>";
			}
		}
	?>
	
</div>

<div class="topnav">
  <a onclick="ca('蛋餅')">蛋餅</a>
  <a onclick="ca('漢堡')">漢堡</a>
  <a onclick="ca('果醬吐司厚片')">果醬吐司厚片</a>
  <a onclick="ca('吐司')">吐司</a>
  <a onclick="ca('焗烤厚片')">焗烤厚片</a>
  <a onclick="ca('熱壓吐司')">熱壓吐司</a>
  <a onclick="ca('燒餅')">燒餅</a>
  <a onclick="ca('總匯')">總匯</a>
  <a onclick="ca('單品')">單品</a>
  <a onclick="ca('加料')">加料</a>
  <a onclick="ca('鍋燒類')">鍋燒類</a>
  <a onclick="ca('中杯飲料')">中杯飲料</a>
  <a onclick="ca('大杯飲料')">大杯飲料</a>
</div>

<div class="row">
  
  <div class="column" id="b1">
    <h2>讀取餐點分類</h2>
    
  </div>
  <div class="column">
  
   <?php
       if(isset($_SESSION["flags"]) && $_SESSION["flags"]==0)
		echo "<h3 id=username11>".$_SESSION["userinputcode"]."<a>的清單</a></h3>";
	   else
		echo "<h3 id=username11></h3>";
		 
	?>
    <div id="b2">	   	</div>
    <Button id="bcheck" onclick="givedata()">確認後下單清除點餐清單</Button>
  </div>
  <div class="column" id="b3">
  
  </div>
  <dialog id=d1>
	   
  </dialog>
</div>

</body>
</html>
