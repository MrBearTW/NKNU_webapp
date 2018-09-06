<?php
session_start();

//登入設定
if(!isset($_SESSION["membername"]) || $_SESSION["membername"]==""){  
	
	if(isset($_POST["username"]) && isset($_POST["pwd"])){
		
		  $username="admin";
		  $pwd="admin";
		
		if(($_POST["username"]==$username)&&($_POST["pwd"]==$pwd)){
			 $_SESSION["membername"]=$username;			
			}
			
		header("Location:login.php");
		
		}
	
	}
	
	//登出設定
	
    if(isset($_GET["logout"]) && ($_GET["logout"]=="true" )){
		
	unset($_SESSION["membername"]);
	
	header("Location:login.php");
		
		}
	
	
	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
if(!isset($_SESSION["membername"])||($_SESSION["membername"]=="")){
	
?>
<form name="form1" method="post" action="">
  <table width="400" border="1" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCC66">登入系統</td>
    </tr>
    <tr>
      <td width="117" align="center">帳號</td>
      <td width="267"><input type="text" name="username" id="username"></td>
    </tr>
     <tr>
      <td width="117" align="center">密碼</td>
      <td width="267"><input type="text" name="pwd" id="pwd"></td>
    </tr>   
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="送出資料"> <input type="reset" name="reset" id="reset" value="重設資料"></td>
    </tr>
  </table>
</form>
<?php
}else{
?>


<table width="400" border="1" align="center">
  <tr>
    <td align="center" bgcolor="#CCCC66">會員登出系統</td>
  </tr>
  <tr>
    <td align="center">親愛的 <?php echo $_SESSION["membername"]; ?> 您好，歡迎使用本系統！</td>
  </tr>
  <tr>
    <td align="center"><a href="login.php?logout=true">登出系統</a></td>
  </tr>
</table>

<?php

}
?>

<p>&nbsp;</p>
</body>
</html>