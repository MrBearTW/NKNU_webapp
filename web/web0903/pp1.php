<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
$sales=38000;
if($sales<10000){   
	     $sales*=1;	  
	  }elseif($sales<=30000){		  
		     $sales*=0.9;		  
		  }elseif($sales<=50000){		  
		       $sales*=0.85;		  
		  }elseif($sales>50000){		  
		        $sales*=0.8;		  
		  }else{			  
			    $sales=0;
			    }

      echo $sales;

?>
</body>
</html>