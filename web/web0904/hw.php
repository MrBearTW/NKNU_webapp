<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>

<?php

$a = 3;


if ($a == 1) {

  ?>
  
<form name="form1" method="post" action="plogin2.php">
  <p>學號：
    <input type="text" name="Sid" id="Sid">
  </p>
  <p>密碼：
    <input type="text" name="Spwd" id="Spwd">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="送出資料">
    <input type="reset" name="reset" id="reset" value="重設資料">
  </p>
</form>
<?php

} else {

?>
  

<form>  
echo "親愛的".$stname."你好".</br>;
 <input type="reset" name="reset" id="reset" value="離開系統">
 </form>



<?php
}
?>
</body>
</html>