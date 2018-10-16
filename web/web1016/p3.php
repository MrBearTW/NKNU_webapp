<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script type="text/javascript" src="scripts/jquery-3.3.1.min.js"></script>
<script>

    $(document).ready(function(e) {
    
	$("#btn2").click(function(e) {
       /*
		obj1=$.ajax({url:"/web/web1016/content/show.txt",async:false});
		$("#mydiv").html(obj1.responseText);
	*/
	$("#mydiv").load("/web/web1016/content/show.txt");
				
    });
		
});

</script>

</head>

<body>
<div id="mydiv">未輸出前字串內容！！</div>
<button id="btn2">執行結果</button>

</body>
</html>



