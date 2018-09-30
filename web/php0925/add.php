<?php 


if (isset($_POST["action"]) && ($_POST["action"] == "add")) {
  require_once("Connection\MyConn.php");

  $link_db = mysql_select_db("school");
  if (!$link_db) die("資料庫連線失敗！！");

  $sql_query = "INSERT INTO `student`(`st_id`,`st_na`,`st_gender`,`st_email`,`st_tel`,`st_addr`)values(";
  $sql_query .= "'" . @$_POST["st_id"] . "',";
  $sql_query .= "'" . @$_POST["st_na"] . "',";
  $sql_query .= "'" . @$_POST["st_gender"] . "',";
  $sql_query .= "'" . @$_POST["st_email"] . "',";
  $sql_query .= "'" . @$_POST["st_tel"] . "',";
  $sql_query .= "'" . @$_POST["st_addr"] . "')";
  $result = mysql_query($sql_query);

//header("Location:p1.php");
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="640" border="1" align="center">
    <tr>
      <td colspan="2" align="center"><h2>學生基本資料-新增資料</h2>
      <p>回官方首頁</p></td>
    </tr>
    <tr>
    <td align="center" valign="middle">欄位名稱</td>
    <td align="center" valign="middle">資料內容</td>
    </tr>
    
    <tr>      <td width="213" align="center" valign="middle">學號</td>
      <td width="411"><input type="text" name="st_id" id="st_id" /></td>
    </tr>
    <tr>
      <td align="center" valign="middle">姓名</td>
      <td><input type="text" name="st_na" id="st_na" /></td>
    </tr>
    <tr>
      <td align="center" valign="middle">性別</td>
      <td><p>
        <label>
          <input name="st_gender" type="radio" id="RadioGroup1_0" value="男" checked="checked" />
          男</label>
        <label>
            <input type="radio" name="st_gender" value="女" id="RadioGroup1_1" />
          女</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td align="center" valign="middle">信箱</td>
      <td><input type="text" name="st_email" id="st_email" /></td>
    </tr>
    <tr>
      <td align="center" valign="middle">電話</td>
      <td><input type="text" name="st_tel" id="st_tel" /></td>
    </tr>
    <tr>
      <td align="center" valign="middle">地址</td>
      <td><input type="text" name="st_addr" id="st_addr" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><input type="submit" name="button1" id="button1" value="新增資料" /> 
      <input type="reset" name="reset" id="reset" value="重設資料" />
      <input name="action" type="hidden" id="action" value="add" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>