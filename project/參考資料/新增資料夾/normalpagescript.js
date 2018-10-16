 <!--  餐點項目分類顯示  -->
   function ca(str) {
	   //alert(str);
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
            document.getElementById("b1").innerHTML = "<h2>餐點項目</h2>"+this.responseText;
          }
       };
     xhttp.open("GET", "menukind.php?f="+str, true);
     xhttp.send();
   }
   <!-- 訊息視窗  -->
   function cs(str,i){
	   
	   document.getElementById("d1").innerHTML="<p id=dname>"+str+"</p>"+
	   "<p>"+"數量"+"</p>"+
	   "<form oninput=x.value=parseInt(a.value)>"+
       "<input type=range id=a value=1>"+
       "<output id=menu_number name=x>1</output>"+
       "</form>"+
	   "<Button onclick=readylist('"+
	   str+
	   "',"+
	   i+
	   ")>確認</Button>"+
	   "<Button onclick=nothing()>關閉</Button>";
	   
	    document.getElementById("d1").showModal();
		
   }
   
   <!-- 直接關閉視窗 無事 -->
   function nothing(){
	   document.getElementById("d1").close();
	   
   }
  
   var sum;
   var str2 = [];
   var number=[];
   var price=[];
   var strandnumber="";
   function readylist(str,i){
	   <!-- 菜名加入 -->
	   str2.push(str);
	   <!-- 數量加入 -->
	   number.push(document.getElementById("menu_number").innerHTML);
	   <!--價格加入 -->
	   price.push(i);
	   <!-- 重製資料表格 -->
	   document.getElementById("b2").innerHTML="";
	   strandnumber="<table><tr><td>餐點名稱</td><td>數量</td><td>單價</td></tr>";
	   for(var s=0;s<str2.length;s++){
	     strandnumber+="<tr><td>"+str2[s]+"</td><td>"+number[s]+"</td><td>"+price[s]+"</td><td><Button onclick=re("+s+")>刪除</Button></td><td><Button onclick=ct("+s+")>修改</Button></td></tr>";
	   }
	   strandnumber+="</table>";
	   sum=0;
	   for(var s=0;s<str2.length;s++){
		   sum+=price[s]*number[s];
	   }
	   strandnumber+="<p>總價:"+sum+"</p>";
	   <!-- 顯示資料表格在畫面上-->
	   document.getElementById("b2").innerHTML+=strandnumber;
	   <!-- 顯示上傳按鈕 -->
	   
	   document.getElementById("bcheck").style.display="block";
	     
	   <!-- 清理dialog -->
	   document.getElementById("d1").innerHTML="";
	   document.getElementById("d1").close();
   }
   
   <!--  上傳到資料庫 -->
   function givedata(){
	   var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
            
			 alert(this.responseText);
			 
          }
       };
	    
		
		/*
		      f[]       餐點名稱 
		      n[]       餐點數量
			  p[]       餐點單價
			  updaten   點餐的相關人員
		
		*/
		   
		   if(document.getElementById("setcustomer")==null){
		       var sendformusername=document.getElementById("username1").innerHTML;
		   }
		   else{
			  var sendformusername=document.getElementById("getusercode").value+","+document.getElementById("username1").innerHTML;   
		   }
           xhttp.open("GET", "upordermenu.php?f[]="+str2+"&n[]="+number+"&p[]="+price+"&updaten="+sendformusername, true);
           xhttp.send();
		   
		   
		   <!---  上傳資料後後清理  -->
		   str2=[];
		   number=[];
		   price=[];
		   document.getElementById("b2").innerHTML="";
		   
		   <!-- 關閉上傳按鈕 -->
	       document.getElementById("bcheck").style.display="none";
		   /*清理資料*/
		   document.getElementById("username11").innerHTML="";
		   if(document.getElementById("getusercode")!=null)
		    document.getElementById("getusercode").value="";
		   
		 
   }
 
   <!-- 刪除 -->
  function re(i){
	  str2.splice(i,1);
	  number.splice(i,1);
	  price.splice(i,1);
	  
	  
	  <!-- 重製表格 -->
	   document.getElementById("b2").innerHTML="";
	   strandnumber="<table><tr><td>餐點名稱</td><td>數量</td><td>價格</td></tr>";
	   for(var s=0;s<str2.length;s++){
	     strandnumber+="<tr><td>"+str2[s]+"</td><td>"+number[s]+"</td><td>"+price[s]+"</td><td><Button onclick=re("+s+")>刪除</Button></td><td><Button onclick=ct("+s+")>修改</Button></td></tr>";
	   }
	   strandnumber+="</table>";
	   sum=0;
	   for(var s=0;s<str2.length;s++){
		   sum+=price[s]*number[s];
	   }
	   strandnumber+="<p>總價:"+sum+"</p>";
	   <!-- 顯示表格在畫面上-->
	   document.getElementById("b2").innerHTML+=strandnumber;
	  
  }
  
  <!-- 彈出修改畫面 -->
  function ct(i){
	  
	  var s=prompt("修改餐點數目","");
	  var p="";
	  
	  <!-- 數值正規劃  只同意全數值-->
	 var regExp = /^[\d]+$/;
      if (regExp.test(s)){
		 // alert(regExp.test(s))
        p=true;
	  }
      else{
		 // alert(regExp.test(s))
        p=false;
	  }
	  
	  if(s!=null && p==true)
	    number[i]=s;
	  else
		 number[i]=number[i];
	  
	  
	  <!-- 重製表格 -->
	   document.getElementById("b2").innerHTML="";
	   strandnumber="<table><tr><td>餐點名稱</td><td>數量</td><td>價格</td></tr>";
	   for(var si=0;si<str2.length;si++){
	     strandnumber+="<tr><td>"+str2[si]+"</td><td>"+number[si]+"</td><td>"+price[si]+"</td><td><Button onclick=re("+si+")>刪除</Button></td><td><Button onclick=ct("+si+")>修改</Button></td></tr>";
	   }
	   strandnumber+="</table>";
	   sum=0;
	   for(var s=0;s<str2.length;s++){
		  sum+=price[s]*number[s];
	   }
	   strandnumber+="<p>總價:"+sum+"</p>";
	   
	   <!-- 顯示表格在畫面上-->
	   document.getElementById("b2").innerHTML+=strandnumber;
	  
  }
  
  function setcustomer(){
	  document.getElementById("username11").innerHTML=document.getElementById("getusercode").value+"的點餐清單";	  
  }
 