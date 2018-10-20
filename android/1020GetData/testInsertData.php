<?php
$host='127.0.0.1'; //你資料庫的位置(如果php和mysql架在同一台, 就不用改囉)
$name='appuser'; //帳號
$pwd='123456';//密碼
$db='apptestdb'; //資料庫名稱

  $con=mysqli_connect($host, $name, $pwd ,$db) or die("無法建立資料庫連結!");
  mysqli_set_charset($con, "UTF8");//設定編碼為UTF-8
  header("Content-Type:text/html; charset=utf-8");//設定網頁編碼

  //接受傳入之資料
	$name=$_GET["name"];
	$phone=$_GET["phone"];
	$addr=$_GET["addr"];
  
  //%d 表示加入的是數字, %s 表示加入的是字串
  if ($name != null && $phone != null && $addr != null){
  $InsertSQL= sprintf ("INSERT INTO `user` (`user_name`,`user_phone`,`user_addr`)
							VALUES ('%s','%s','%s')",$name, $phone, $addr);
	//下面是常用的標準寫法, 在呼叫執行的過程中，die中的語法可以回傳mysql伺服器的錯誤說明!
	$query = mysqli_query($con,$InsertSQL) or die (mysqli_error($con)); 
	if ($query==1){//表示有正常執行
		//新增完成後,回傳最新三筆資料
		$result=mysqli_query($con, "SELECT * FROM user Order by user_id desc limit 0,1");//user=資料表
		while($row=mysqli_fetch_assoc($result)){
			$tmp[]=$row;
		}
		//放到json裡面，名稱是data
		echo json_encode(array("data"=>$tmp));
	}
  }else
	  echo "空空如也!沒有參數";

  mysqli_close($con);

?>