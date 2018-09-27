<?php

require_once("Connection\MyConn.php");

$link_db=mysql_select_db("school");
if(!$link_db) die("資料庫連線失敗");

@$sql_data="SELECT * FROM `student` WHERE `st_id`='".$_GET["id"]."'";
$result=mysql_query($sql_data);
$row_result=mysql_fetch_assoc($result);


if(isset($_POST["action"])&&($_POST["action"]=="update")){
	$sql_query="UPDATE `student` SET ";
	$sql_query.="st_na='".@$_POST["st_na"]."',";
    $sql_query.="st_gender='".@$_POST["st_gender"]."',";
    $sql_query.="st_email='".@$_POST["st_email"]."',";
    $sql_query.="st_tel='".@$_POST["st_tel"]."',";
    $sql_query.="st_addr='".@$_POST["st_addr"]."' ";
	$sql_query.="WHERE `st_id`='".$_POST["st_id"]."'";
	
	mysql_query($sql_query);
	header("Location:p1.php");
	
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
      <td colspan="2" align="center"><h2>學生基本資料-更新資料</h2>
      <p><a href="p1.php">回官方首頁</a></p></td>
    </tr>
    <tr>
    <td align="center" valign="middle">欄位名稱</td>
    <td align="center" valign="middle">資料內容</td>
    </tr>
    
    <tr>      <td width="213" align="center" valign="middle">學號</td>
      <td width="411"><input name="st_id" type="text" id="st_id" value="<?php echo $row_result["st_id"]; ?>" /></td>
    </tr>
    <tr>
      <td align="center" valign="middle">姓名</td>
      <td><input name="st_na" type="text" id="st_na" value="<?php echo $row_result["st_na"]; ?>" /></td>
    </tr>
    <tr>
      <td align="center" valign="middle">性別</td>
      <td><p>
      	  <?php if ($row_result["st_gender"]=="男"){ ?>
            <label><input type="radio" name="st_gender" value="男" id="RadioGroup1_0" checked="checked"/>男</label>
            <label><input type="radio" name="st_gender" value="女" id="RadioGroup1_1" />女</label>
          <?php
		  }else if ($row_result["st_gender"]=="女"){ 
		  ?> 
            <label><input type="radio" name="st_gender" value="男" id="RadioGroup1_0" />男</label>
            <label><input type="radio" name="st_gender" value="女" id="RadioGroup1_1" checked="checked" />女</label>
          <?php } ?>
          
        <br />
      </p></td>
    </tr>
    <tr>
      <td align="center" valign="middle">信箱</td>
      <td><input name="st_email" type="text" id="st_email" value="<?php echo $row_result["st_email"]; ?>" /></td>
    </tr>
    <tr>
      <td align="center" valign="middle">電話</td>
      <td><input name="st_tel" type="text" id="st_tel" value="<?php echo $row_result["st_tel"]; ?>" /></td>
    </tr>
    <tr>
      <td align="center" valign="middle">地址</td>
      <td><input name="st_addr" type="text" id="st_addr" value="<?php echo $row_result["st_addr"]; ?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><input type="submit" name="button1" id="button1" value="更新資料" /> 
      <input type="reset" name="reset" id="reset" value="重設資料" />
      <input name="action" type="hidden" id="action" value="update" />
      </td>
    </tr>
  </table>
</form>

</body>
</html>