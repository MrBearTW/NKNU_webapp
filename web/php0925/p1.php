<?php

require_once("Connection\MyConn.php");

$sql="SELECT * FROM `student`";
$result=mysql_query($sql);
$total_rec=mysql_num_rows($result);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table width="700" border="1" align="center">
  <tr>
    <td colspan="6" align="center">學生基本資料</td>
    <td align="center"><a href="add.php">新增學生資料</a></td>
  </tr>
  <tr>
    <th width="12%" align="center">ID</th>
    <th width="12%" align="center">姓名</th>
    <th width="12%" align="center">男女</th>
    <th width="12%" align="center">email</th>
    <th width="12%" align="center">電話</th>
    <th width="20%" align="center">地址</th>
    <th width="25%" align="center">總人數：<?php echo $total_rec; ?></th>
  </tr>
  <?php
  while($row_result=mysql_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row_result["st_id"]."</td>";
    echo " <td>".$row_result["st_na"]."</td>";
    echo "<td>".$row_result["st_gender"]."</td>";
    echo "<td>".$row_result["st_email"]."</td>";
    echo "<td>".$row_result["st_tel"]."</td>";
    echo "<td>".$row_result["st_addr"]."</td>";
    echo "<td>
			<a href='update.php'>修改</a> 
			<a href='delete.php'>刪除</a>
		  </td>";
    echo "</tr>";
  }
  ?>
</table>
</body>
</html>