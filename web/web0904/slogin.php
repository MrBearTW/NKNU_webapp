<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
我是登入頁
<?php
$Res = $_GET["Res"];
if ($Res == "Nono") {
  echo "xxxxxxx請重新輸入";
}
?>

<form name="form1" method="post" action="au.php">
  <p>學號：
    <input type="text" name="Sid" id="Sid">
  </p>
  <p>密碼：
    <input type="password" name="Spwd" id="Spwd">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="送出資料">
    <input type="reset" name="reset" id="reset" value="重設資料">
  </p>
</form>
</body>
</html>