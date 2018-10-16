<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script type="text/javascript" src="scripts/jquery-3.3.1.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e){
	$("p").click(function(e) {
        
		$(this).hide();
				
    });
		
	$("#btn1").click(function(e) {
        
		alert("出場名單："+$("#aa").html());

    });

	});

</script>


</head>

<body>
<p>測試文字一</p>
<p>測試文字二</p>
<p>
  <input type="button" name="btn1" id="btn1" value="按鈕" />
</p>
<p id="aa">大家好！<strong>我是李澎澎！！！</strong></p>

</body>
</html>



