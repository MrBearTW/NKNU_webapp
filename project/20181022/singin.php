<?php
   if(isset($_GET["s1"])){
	   echo "sssss";
   }
   else{
?>
<!DOCTYPE html>
<html lang="utf8">
<head>
  <title>餐餐自由配</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
   
     $(document).ready(function(){
		 $("#b1").click(function(){
			
			   if(document.getElementById("inputpassword").value!="")
               var s=document.getElementById("inputpassword").value;
          	   $.get("singin.php",
			     {
				   s1:"sssss"
				 },
				 function(data,status){
					 if(data)
						 window.location.href="welcome.php"
				 }
		      );
		 });
	 });
  </script>
</head>
<body>
  <div class="border border-primary mx-auto p-3" style="width:800px">
     <form>
	    <div class="form-group">
		     <label >帳號</label>
			 <input type="password" class="form-control" id="inputpassword" >
		</div>
		<div class="form-group">
		     <label >密碼</label>
			 <input type="password" class="form-control" id="inputpassword2" >
		</div>
		<Button id="b1" type="button" class="btn btn-primary btn-block">送出資料</Button>
	 </form>
  </div>
</body>
</html>
<?php
  }
?>