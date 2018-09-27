<?php

require_once("Connection\MyConn.php");

$link_db=mysql_select_db("school");
if(!$link_db) die("資料庫連線失敗！！");


if(isset($_POST["action"])&&($_POST["action"]=="delete")){

$sql_query="DELETE FROM `student` WHERE `st_id`='".$_POST["st_id"]."'";

mysql_query($sql_query);

header("Location:p1.php");

}



@$sql_data="SELECT * FROM `student` WHERE `st_id`='".$_GET["id"]."'";
$result=mysql_query($sql_data);
$row_result=mysql_fetch_assoc($result);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="480" border="1" align="center">
    <tr>
      <td colspan="2" align="center"><h2>學生基本資料-刪除資料</h2>
        <p><a href="p1.php">回官方首頁</a></p></td>
    </tr>
      
    <tr>
      <td width="130" align="center">姓名</td>
      <td width="334"><?php echo $row_result["st_na"]; ?></td>
    </tr>
    <tr>
      <td align="center">性別</td>
      <td><?php echo $row_result["st_gender"]; ?></td>
    </tr>
    <tr>
      <td align="center">信箱</td>
      <td><?php echo $row_result["st_email"]; ?></td>
    </tr>
    <tr>
      <td align="center">電話</td>
      <td><?php echo $row_result["st_tel"]; ?></td>
    </tr>
    <tr>
      <td align="center">地址</td>
      <td><?php echo $row_result["st_addr"]; ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="delete" id="delete" value="確認刪除按鈕" />
       <input name="st_id" type="hidden" id="st_id" value="<?php echo $row_result["st_id"] ?>" /></td>
      <input name="action" type="hidden" id="action" value="delete" />

    </tr>
  </table>
</form>
</body>
</html>