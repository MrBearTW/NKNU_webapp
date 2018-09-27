<?php

require_once("Connection\MyConn.php");

$link_db=mysql_select_db("school");
if(!$link_db) die("資料庫連線失敗！！");

//每頁筆數
$pageRow_rec=6;
//起始頁數
$num_pages=1;

//變更起始頁數位置
if(isset($_GET["page"])){
$num_pages=$_GET["page"];

}
//筆數設定
$startRow_rec=($num_pages-1)*$pageRow_rec;



$sql="SELECT * FROM `student`";
$sql_limit="SELECT * FROM `student` LIMIT ".$startRow_rec.", ".$pageRow_rec;
$result=mysql_query($sql_limit);
$all_result=mysql_query($sql);

//資料總筆數
$total_rec=mysql_num_rows($all_result);
//設計資料頁數
$total_page=ceil($total_rec/$pageRow_rec);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table width="736" border="1" align="center">
  <tr>
    <td align="center">&nbsp;</td>
    <td colspan="5" align="center">學生資料管理系統</td>
    <td align="center"><a href="add.php">新增學生資料</a></td>
  </tr>
  <tr>
    <th width="77" align="center" valign="middle">學號</th>
    <th width="77" align="center" valign="middle">姓名</th>
    <th width="77" align="center" valign="middle">性別</th>
    <th width="91" align="center" valign="middle">信箱</th>
    <th width="99" align="center" valign="middle">電話</th>
    <th width="149" align="center" valign="middle">地址</th>
    <th width="120" align="left">總人數：<?php echo $total_rec; ?> </th>
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
   
   
    echo "<td><a href='update.php?id=".$row_result["st_id"]."'>修改</a>";
    echo "<a href='delete.php?id=".$row_result["st_id"]."'>刪除</a></td>";
	     
	
    echo "</tr>";
	
	
  }
  ?>
  
</table>
<table width="736" border="0" align="center">
<tr>
<td align="center">
<?php if($num_pages>1){  ?>
<a href="p1.php?page=1">第一頁</a> 
<a href="p1.php?page=<?php echo $num_pages-1; ?>">上一頁</a> 
<?php } ?>
<?php if($num_pages<$total_page){  ?>
<a href="p1.php?page=<?php echo $num_pages+1; ?>">下一頁</a>
<a href="p1.php?page=<?php echo $total_page; ?>">最末頁</a>
<?php } ?>
</td>
</tr>

</table>

</body>
</html>