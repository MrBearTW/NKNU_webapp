 function ca(str) {
	 //alert(str);
     var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
            document.getElementById("b1").innerHTML = this.responseText;
          }
       };
	   
	   switch(str){
		   case 1:
             xhttp.open("GET", "singin.php", true);
			break;
			case 2:
             xhttp.open("GET", "singup.php", true);
			break;
			case 3:
             xhttp.open("GET", "news.php", true);
			break;
			case 4:
             xhttp.open("GET", "about.php", true);
			break;
			
		  
       }
       xhttp.send();
 }
 
 
 function singif() {
	  
	  var a=document.getElementById("userinputcode").value;
	  var b=document.getElementById("userinputpassword").value;
	  if(a!="" && b!=""){
	  
      var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
			if(this.responseText=="登入資訊錯誤")
             alert( this.responseText);
		    else
			 window.location=this.responseText;
		    
          }
       };
          xhttp.open("POST", "singindealwith.php", true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("userinputcode="+a+"&userinputpassword="+b);
	  }
 }