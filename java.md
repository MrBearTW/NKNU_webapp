### 那些J什麼的
JDK{JRE[JVM]}  
JDK Java SE Development Kits開發工具{JRE Java執行環境[JVM Java虛擬機器]}  
Java EE：Java Platform,Enterprise Edition(包含JSP Servlet)  
  
### 8種型態
    整數       浮點數         字元     布林
8   byte                             boolean
16  short                   char
32  int        float
64  long       double

32位元(4位元組)  int  

128 64 32 16 8 4 2 1 .  0.5 0.25 0.125  
  
---
1位元組 = 1 Byte = 8 bit  
1位元 = 1bit  
ADSL = ?? bps (加網路衰減除以10)  

---
強型別  
123+123=246  
弱型別  
123+123=可能是123123或246  

### 邏輯運算
==  是否等於  
!=  是否不等於  

&& || 為短路運算子  
&& 一者為false，則全為false  
|| 一者為true ，則全為true  

### 位元運算(7個)

      128 64  32  16  8  4  2  1
    7   0  0   0   0  0  1  1  1
&   3   0  0   0   0  0  0  1  1
___________________________________
        0  0   0   0  0  0  1  1

      128 64  32  16  8  4  2  1
    7   0  0   0   0  0  1  1  1
|   3   0  0   0   0  0  0  1  1
___________________________________
        0  0   0   0  0  1  1  1 

^ (XOR) 互斥  
0 XOR 0   0  
1 XOR 0   1  
0 XOR 1   1  
1 XOR 1   0  
不一樣1  一樣0  
  
開頭 0正1負  
01111111 +127  
10000000 -128  
  
~ 補數  
>>右移  右移後  其他補原本的0或1
<<左移  左移後  其他補0

>>>正右移

++i  先取值，再加一  
i++  先加一，再取值  
  
## 流程控制
敘述式  
選擇式  
迴圈式  

### if else

### switch
只能判斷 byte short int char String Enum

### for(  ;  ;  )
for( 1 ; 2 ; 4 ){3}  
for(初始值;布林判斷式;計算){執行}  
  
1.初始值  
while(2.布林判斷)  
(3.執行4.計算)  
  
break     跳離最接近的迴圈  
continue  跳過最接近的迴圈一次  
  
b_label:{}  break b_label  
c_label:  
  
# Ch4 認識物件
套件(package)  
  └類別(class)------->產出物件  
    ├屬性(field)  
    ├建構子(constructor)        //建構子第一個字小寫之後大寫，駝峰式命名法  
    └方法(method)  

System.out.println  
類別.  屬性.  方法  
  
Ex.   Date  date    =        new         Date();  
 //  類別  物件    指派   跟記憶體要空間  建構子  
 // class object  
  
# Array陣列
陣列預設，值是0，布林值是false  
  
二維陣列  
int [][] array= new int [2][3]  
一維      二維  
[0]      [0][1] [0][2] [0][3]  
[1]      [1][1] [2][2] [3][3]  
  
## 字串
字串物件一旦建立，就無法更動物件中的內容  
== 比較字串是比較記憶體位置  
要比較內容要equals  
用+ 相加字串隱含NEW的效果  

## 物件封裝(課本CH5 老師PPTCH6)

物件導向  
1.封裝  2.繼承  3.多型  
  
設計一個類別  
類別名稱||屬性1,屬性2||方法1,方法2  
  
屬性field盡量設計成private  
方法method盡量設計成public  
  
建構子要和類別名稱一樣  
  
private是限制在同一個class  
  
執行時若是用到其他class類別，其他class類別會自動再compile一次  
  
### 類別修飾詞
public 不限制  
protected  有繼承關係  
(default空白) 同一個Package  
private 同一個class  
  
## this
這個class類別的  

## 建構子(Constructor)
用處：初始類別時可以給它一些屬性  
1.和Class類別同名  
2.無須宣告傳回型態/無任何回傳值(連void都不能有(前面不會出現))(void是考零分，建構子是缺考)  
  
若沒有給建構子，Compile的時候會自動送一個  
  
建構子內可以有動作，但沒有回傳  
  
## Static
優先於程式而先存在  
  
加了static 就不會個別擁有 變成共用  
  
屬性剛好是物件就可以一直...串下去  
方法不會寫在方法裡面  
  
## 重載(Overload)
同方法名稱，不同方法  
多個類似方法使用統一名稱，帶入參數不同而自動呼叫對應方法  
  
類別名稱.方法()  
類別名稱.屬性()  
加了static就可以直接呼叫  
  
### 垃圾清理
寫Java語言不控制記憶體，JVM會自動處理  
  

# 課本CH.6 pptCH.8 繼承、多型
extend  
  

沒有小括號的通常是屬性  
父類別不能繼承子類別  
屬性盡量加private，但加了private子類別  
protected有繼承關係就可以取用到  
自己的建構子會叫用父類別的建構子  
  
extend object  
一定會找到繼承.object  
object內的方法都要會  
  
方法 Override 重新定義  
```
    Override時，子類別方法的存取範圍只能大於或等於父類別原方法，例如private的
    父類別存取範圍，可用protected或public來改寫子類別方法的存取範圍。但是若
    原本父類別就是public的存取範圍，就無法以protected或private來改寫子類別方法
    。簡言之，範圍大小順序為public、protected、(default)、private，Override
    只能改寫成大於等於原本的存取範圍。  
```
  
super.   是繼承  
acc.    是製造一個新的  
  
Account acc = new Account("9487-8989174",1000);  
System.out.println(acc.getAccountNumber());  
  


final可加三個地方  
1.final放在class 代表禁止繼承  
2.final放在field 代表禁止改值  
3.final放在method代表禁止override  
  
[類別的宣告]  
public + final + class + 類別名稱 extends 父類別 implements 介面1 , 介面2 
( )  
{}  
[屬性的宣告]  
public      + final + static + 屬性型態 + 屬性名稱 = 值 ;  
protected  
(default)  
privated  
[方法的宣告]  
public      + final + static + 回傳型態 + 方法名稱 (參數型態 參數1 , 參數型態 參數2) throws 例外  
protected                       void  
(default)  
privated  
            {return 特定回傳型態的值;}  

  

多型 Polymorphism  
一式多型  一個式子服務多種形態  

     object                       動物  
     /   \                       /    \  
String   Integer                虎     兔  
Object o = new String("");   動物 a1 = new 虎();  
  
### 抽象類別

類別的完整性排序  
class  
abstract class  
interface           implement後所有的方法都要實作  

只能繼承一個父類別，但可以有多個implement介面

### interface

           extends
class ---------------class  
|  
|implements  
|  
|          extends  
interface------------interface  
  
collection api  <----本身是interface  底下有很多subinterface  
  
Abstract和interface不能直接new，要實作他的類別  

## package  課本2-18頁
完整的套件 + 類別名稱 才能執行  
javac -d . Hello.java   compilejava檔內有套件路徑的要加  
java org.tcfst.Hello    執行套件內的檔案要寫路徑  
  
+public     不限制  
\#protected  繼承關係  
~(default)  同一個package  
-private    同一個class  
  
通常一個java檔不超過200行  
  
Java的import像是增加一個path,沒有載入任何東西  
import XXX.YYY.*    *不要亂用，可能會叫到重複的  

# 課本PPT-CH.10 Exception例外處理

throable   Erro                       記憶體用完/系統有問題  
         └ Exception                  受控制的  
                  └RuntimeException   受檢例外  


---
爬蟲知名套件  jsoup unirest
https://www.udemy.com/learn-linux-and-become-linux-professional/?siteID=BoHFIyu6APU-ktxUL7Vthrle7uMDS3Ed1Q&LSNPUBID=BoHFIyu6APU
---
金融數據
https://www.facebook.com/fusions360/posts/768078560062347
---
java import是做註記，沒有載入任何東西  
  
倒資料常用到iterator  
  
iterator沒有實作  
https://docs.oracle.com/javase/7/docs/api/java/util/Collection.html  
Collection extends Iterable  
  
List   
*.ArrayList   加入或存取較快   一格一格安排放好  
*.LinkedList  做sort排序較快   哪裡有格子就放哪裡串連   可以做addfirst  
  
Set 有自己的排序規則(依Hashcode雜湊編碼)  
  
Set<String>   <>是限定用法  
  
TreeSet是Java SE中唯一實作SortedSet介面的類別  
  
Map 和 Collection是不同家  
  
Hashmap 放put 取get 刪除remove  
https://docs.oracle.com/javase/7/docs/api/java/util/HashMap.html  
  
講到Map就會講到套件常用的Hashtable  
https://docs.oracle.com/javase/7/docs/api/java/util/Hashtable.html  
  
例如System.getProperties() extens hasttable  
https://docs.oracle.com/javase/7/docs/api/java/util/Properties.html  
  
# IO 課本Ch10  PPT.Ch12  
https://docs.oracle.com/javase/7/docs/api/java/io/File.html  
file在IO底下  
  
IO主體4種
1.InputStream   位元0和1的資料、通用  
2.OutputStream  
3.Reader        單純文字檔  
4.Writer  

  
 
java.lang 之外的都要自己import  
方法後面都要給()  有參數就放進去    

# Thread 執行緒(線程) 課本Ch11  PPT.Ch13


synchronized  針對物件  


# NKNU
指派  
重複  
判斷(選擇)  

遇到 String + Int 時   
會將 Int轉成String 再相加   

2維陣列除了每個一為陣列外，本身也是一個陣列  


### 控制符號
%d 十進位  
%f 浮點數  
%s %S 字串格式符號  
%c 字元  
%b 布林  