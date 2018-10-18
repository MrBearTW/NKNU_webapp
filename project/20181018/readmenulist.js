 var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
            
			     document.getElementById("b2").innerHTML=this.responseText;
			 
          }
       };
	    
       xhttp.open("GET", "readmenulistall.php", true);
       xhttp.send();