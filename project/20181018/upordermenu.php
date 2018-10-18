<?php 
			//轉字串
			//餐點名稱
		    $a=implode($_GET["f"]);
			//餐點數量
			$c=implode($_GET["n"]);
			//餐點價格
			$d=implode($_GET["p"]);
			//點餐相關人員
			$e=$_GET["updaten"];
			
			//print_r($_GET["p"]);
			//轉成陣列處理資料格式
			$f=(explode(",",$d));
			$g=(explode(",",$c));
			$ee=(explode(",",$e));
			//總價
			$sum=0;
			for($i=0;$i<count($f);$i++){
				$sum=$sum+($f[$i]*$g[$i]);
			}
			//echo $sum;
			//echo gettype($sum);
			//餐點內容
			 header("Content-type:text/html;charset=UTF-8");
             $db_link=mysql_connect("localhost","root","");
             mysql_query("SET NAMES utf8");
             $seledb=mysql_select_db("coustmer");
             $sql_query="INSERT INTO `oorder_detail` (menu,csid,number,price,sum) VALUES('";
			 $sql_query.=$a."','";
			 $sql_query.=$e."','";
			 $sql_query.=$c."','";
			 $sql_query.=$d."','";
			 $sql_query.=$sum."')";
             $as=mysql_query($sql_query);
			 
			 
			//餐點清單建立
             $sql_query="INSERT INTO `oorder` (or_total,or_id,cu_id,or_from,or_sat) VALUES('";
			 $sql_query.=$sum."','";
			 
			 $txts=count($ee);
			 if($txts>1){
			 $sql_query.=$ee[1]."','";
			 $sql_query.=$ee[0]."','";
			 $sql_query.="店內下單"."','";
			 }else{
				$sql_query.=$ee[0]."','";
			    $sql_query.=$ee[0]."','";
			    $sql_query.="線上下單"."','"; 
			 }
			 $sql_query.="已成立清單"."')";
             $as=mysql_query($sql_query);
             
			 //sql_query="SELECT NOW()";
			 //echo mysql_query($sql_query);
			
			
			//ooder 時間寫入再用各個條件去訂訂單編號         訂單已成立  可出單再生
		    //20181014
            
			$result = mysql_query("SELECT DATE_FORMAT(NOW(),'%Y%m%d')");
			$saved="";
             if($result){
                while($data = mysql_fetch_assoc($result)){
					
					foreach($data as $value){
						
						$saved=$value;
						
					}
				}
             }
			
			if($txts>1){ 
			  $sql_query="UPDATE oorder SET listtime='".$saved."' WHERE cu_id='".$ee[0]."' AND or_id='".$ee[1]."'";
			 }else{
				$sql_query="UPDATE oorder SET listtime='".$saved."' WHERE cu_id='".$ee[0]."' AND or_id='".$ee[0]."'";
			 }
			 mysql_query($sql_query);
			 
			 
			
	
            //餐點清單已建立   sql表格自動生成   autonumber
            //再依條件尋找 autonumber    設定成訂單編號
			//20181015
			$result="Select autonumber FROM `oorder` WHERE cu_id='";
			
			if($txts>1){ 
			  $result.=$ee[0]."' AND or_id='".$ee[1]."'";
			 }else{
			  $result.=$ee[0]."' AND or_id='".$ee[0]."'";
			 }
			 
			 //echo $sql_query;
			 $result=mysql_query($result);
			
			 
			 $savenumber=0;
			 
             if($result){
				 
                while($data = mysql_fetch_assoc($result)){
					
					foreach($data as $value){
						
						$savenumber=$value;
						
					}
				}
             }
			 
			 echo $savenumber."\n";
			 //echo $savenumber;
			//取得特定對象的清單內容   建立單號
			 
			$sql_query="UPDATE oorder SET or_num='o".$saved.$savenumber."' WHERE cu_id='";
			
			if($txts>1){ 
			  $sql_query.=$ee[0]."' AND or_id='".$ee[1]."' AND autonumber='".$savenumber."'";
			 }else{
			  $sql_query.=$ee[0]."' AND or_id='".$ee[0]."' AND autonumber='".$savenumber."'";
			 }
		     echo $sql_query."\n";
			 mysql_query($sql_query);
			 
				
			 //echo $sql_query;
			 echo "訂單以建構";
			 
           
            
   
		    
		
		
?>