<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
我是登入頁
<?php

   $pid=$_POST["Sid"];
   $pw=$_POST["Spwd"];

   
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<form name="form1" method="post" action="">
  <p>學號：
    <input type="text" name="Sid2" id="Sid2" value="<?php echo $pid ?>">
  </p>
  <p>密碼：
    <input type="text" name="Spwd2" id="Spwd2" value="<?php echo $pw ?>">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="確認送出">
  </p>
</form>
</body>
</html>