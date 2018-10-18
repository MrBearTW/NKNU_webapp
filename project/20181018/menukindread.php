<?php
   header("Content-type:text/html;charset=UTF-8");
   $db_link=mysql_connect("localhost","root","");
   mysql_query("SET NAMES utf8");
   $seledb=mysql_select_db("coustmer");
   //echo $a;
   $sql_query="SELECT * FROM `menu` where `menu_group` LIKE '".$a."'";
   //echo $sql_query;
   $result=mysql_query($sql_query);
  // echo mysql_num_rows($result);
?>