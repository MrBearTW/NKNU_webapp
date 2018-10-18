function ca(a){
	
	var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
            document.getElementById("b1").innerHTML = this.responseText;
          }
       };
	   
	   switch(a){
		   case 0:
             xhttp.open("GET", "aboutemployee.php", true);
			 xhttp.send();
			break;
			case 1:
             xhttp.open("GET", "aboutfood.php", true);
			 xhttp.send();
			break;
			case 2:
             xhttp.open("GET", "changenews.php", true);
			 xhttp.send();
			break;
			case 3:
             xhttp.open("GET", "changlist.php", true);
			 xhttp.send();
			break;	
            case 4:
             xhttp.open("GET", "exit.php", true);
			 xhttp.send();
			window.location.href="http://localhost/index2.php";
			break;				
				  
       }
       
	
}