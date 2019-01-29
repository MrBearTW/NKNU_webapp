上課資料https://goo.gl/ozrmGk  


i7 K系列 8xxx 兩萬多  
i5 3xxx 4xxx 六千多  
i3 3xxx 三千多  
  
bit 一個位元組
byte = 8bit
KB = 1024bytes
MB
GB
TB

NAS 12倍

PHP Web Framework
CodeIgniter 
  
laravel整理  
https://oomusou.io/laravel/laravel-for-newbie/  

新北市樹林國小 LARAVEL 工作坊  
https://www.laravel-dojo.com/workshops/201507-ntpc  

  
vue.js  


奇同位元檢查與偶同位元檢查

霍夫曼編碼樹

網頁照片要放幾乘幾的大小？  
APP的ICON的大小是多少？  

24位元 JPG BMP  
32位元 PNG 
SVG 點陣但可以仿向量
APNG LINE貼圖

網頁大小 
APP大小 3X~5X MB

新的格式
圖片webp
視訊webm ogv
音訊ogg


# 2018/08/20
Dreamweaver
網站 新增網站  

C:\web0820
root
  html
    medias
    images
    css
    scripts
    source
設定根目錄路徑
設定圖片目錄路徑
調成傳統模式並重設重統模式
偏好設定中調整預設文件為html5


w3cschool有空去看一下

### sp1.html
找icon小圖示
下載ico檔案
https://www.iconfinder.com/
<link href="images/檔名.ico" rel="shortcut icon" type="image/icon"/>

<p></p>段落  
</br>換行  
<h1></h1>標題  
可用屬性選擇器選取  


<p>&nbsp;</p>
空白保留字串用來保留段落

### sp2.html
練習使用項目清單

### sp3.html
插入表格  
設定第一行為表頭  
寬度單位為像素  

align水平對齊
valign垂直對齊

可以整個表格至中

### sp4.html
調整圖片或表格寬度 用%表示  

### 註冊byehost網路空間
帳號密碼要收好  
### 安裝FileZilla

### sp5.html
使用iframe連結外部網站  

# 201/08/27  
## CSS
可以寫在內部也可以寫在外部  
## Selector
ID名稱(有唯一性)  
class類別  
element標籤  
combination複合  
## div
頁面最大的框就是body  
  
padding內距  
margin外距  
  
預設是靠左上角的位子  
  
top  
bottom  
left  
right  
  
Ex. 往內往下padding-top  

第一個框用`margin-top:56px;`可能會有問題  
要到外面一個的框往內推`padding-top:56px;`  
  
## reset.css
有一些可以直接歸零  
  
## wrapper
margin= 上 右 下 左   
margin= 上下 左右  
margin:0 auto;  
## 註解
HTML的註解<!--   -->


## LOGO
`background-size:contain;`

## float

WYSIWYG HTML editor
Amaya?
KompoZer?

# 2018/09/01
## form
post 透過HTTP Request 方式，故參數與填寫內容不會顯示於URL  
get 透過URL帶資料  
  

stack堆疊(由下往上) heap推積(由上往下)  
1.Q:宣告變數不給值可不可以output？ A:不行，  
2.列舉可以塞整數布林放在一起，陣列不行  
3.  
4.  
  
name ->定義表單名稱  
method ->資料傳送方式 (post,get)  
action ->資料傳送目標 (不設定(null),頁面(page.php),變數(js,php))  
  
Dreamweaver叫出`<form name="form1" method="post" action="">            </form>`
在設計檢視先點一下，標籤表單>表單  

郵局有提供API可以選地址？  

## Xampp
phpMyAdmin
php.ini
WebServer

配合Android建議安裝5.6.37 / PHP 5.6.37就好  
控制台>程式和功能>開啟或關閉Windows功能  




Java初學指引：使用SE7  
作者：陳錦輝  
https://www.taaze.tw/usedList.html?oid=11100585542  
  
Java SE7/8 OCAJP 專業認證指南：擬真試題實戰
作者： 曾瑞君
http://www.books.com.tw/products/0010720234  
  
深入淺出 Java 程式設計 第二版
https://www.books.com.tw/products/0010311883

### 新增一個網站
1.改Xampp控制台Apache的httpd.conf的`root的路徑`  
`DocumentRoot "C:/Users/APP User/Documents/github/nknuapp/web/php0925"`
`<Directory "C:/Users/APP User/Documents/github/nknuapp/web/php0925">`
2.改Dreamweaver設定  
網站管理>伺服器  
伺服器名稱：`xampp(自訂)`  
連線方式：選`本機/網路`  
伺服器資料夾：`網站目錄`  
Web URL：`http://localhost/`  
網站管理>進階
伺服器模式：`PHP MySQL`(之後新增檔案會自動變成.php檔)  
  
測試伺服器`勾`起來，存檔  

## PHP
打在兩個問號中間`<?php     ?>`

匿名 primitive

PHP和JavaScript都是弱屬性

### 換行
加上`."<br />"`  

### 運算子
算術 ^ % + - * /  
比較 > >= = <= <  
邏輯 && AND OR || NOT  
遞增 i++(後至運算子) ++i(前置運算子) i-- --i  
  
PHP中比較運算子若是TRUE會輸出1  
  
$a+=$b  
$a=$a+$b  
  
i++常用於LOOP  
++i常用於雙迴圈  

# 2018/09/03
## 選擇
switch/case 特定in 對應字元字串條件  
if/if/else/elseif/else 模糊like 區間值  
## 迴圈
for 常用在值的處理(多維陣列)  
while 不知道終值(輸入密碼)  
do/while 進行處理之後，再檢查條件  

Array 1.宣告陣列長度 2.[*]給予值  

使用for迴圈時，若是用到arraylist linklist，可能沒有初始值  

## function
1呼叫
2控制 事件 onclik
3計數

有引數時

return

## buffer

scaner(沒有buffer)
bufferreader(數量大的時候要用這個)

web0903-pp7  
原本是沒有用到buffer  
加入後會在伺服器端php增加buffer增加處理速度    
  
# 2018/09/04
網頁服務三點：驗證，資料存取，服務  
## 傳接值
`&amp`and替代符號  
透過"超聯結"給值用get接  
用post接  

帳號密碼登入設計要多加一個中介au.php  

## cookie

名稱  
變數  
效期 效期時間歸零  

做一個counter
counter不應該用cookie做，不然一直F5重新整理就飽了
要用伺服器端session


<<作業>>
同一頁顯示
無登入就是登入頁面
有登入就顯示"親愛的XXX你好"和離開系統回到登入頁面

## 物件
物件之前要先有類別

類別class包含 屬性 方法 
建構子一定不能return

屬性宣告

## 字符串函数


# 20180906

有button的話要放在form裡面
## 作業講解 web0904_login.php
消除session用unset

## strtotime

## is_readable	readfile
搭配if可將過長文章分頁顯示

## read write
w+ 就算是唯讀也可以寫
讀取顯示圖片  

# MySQL
CMD加入PATH  
`set PATH=C:\xampp\mysql\bin;++++++原本的原本的原本的`  

##改密碼
C:\xampp\phpMyAdmin\config.inc.php
第21行加入密碼  
```
/* Authentication type and info */
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = '';<<<<<<<<<<<<<<<這個
```
選無密碼

##新增sp1使用者


# 2018/09/10

改成utf8_unicode_ci  

## 前綴字元
_xxxxx
1備份
2參考欄
3對應字元

Auto_Increament

1不可重複Primary Key(主鍵)
2AI_PK



Navicat 

SSL伺服器



order by
asc遞增
desc遞減

varchar 1 <<是字數



改my.ini
# enable-named-pipe
key_buffer = 16M  
max_allowed_packet = 10M 
sort_buffer_size = 512K  
net_buffer_length = 8K  
read_buffer_size = 8192K  
read_rnd_buffer_size = 512K  
myisam_sort_buffer_size = 64M  
log_error = "mysql_error.log"  



ABS()絕對值  
ROUND([值],位數)四捨五入  

# 2018/09/20


Java在一個陣列內不可以放入不一樣的格式  

有序陣列參照  
有值陣列參照  

#2018/09/26

add.php 插入隱藏欄位  


#2018/09/27
php操作刪修


#2018/09/28
正規化


# 2018/10/03
server    >   DB    >   table   >   fetch
host         useDB      select      array
username                            num_rows
pwd

### JAVA架構
#### conscel
#### form
swing  
awt  
cpanel  

serverlet
JSP

## 
http://www.sanmin.com.tw/Product/index/000506696
物件導向程式分析與設計（附光碟）  
ISBN13：9789867138880  
出版社：THOMSON  
作者：張世敏 譯  

海大 吳宗杉老師

流程圖一定有箭頭


#JAVA
宣告變數沒有初始化  不能輸出  會erro

## UML
CLASS -1. attribute(屬性，不是變數) 2. method

## 邏輯模型
階層化  
順序優先  

## MVC
## 泛型

List <Book> books = (List<Book>) session.getAttribute("books");

同時擁有List和<Book>的屬性  
產生的值直接給session  
去除會有導致無法繼承的問題  
  
Array 一開始就給
List無上限
arraylist
linklist有頭尾
  
hash  
  
執行泛型時會觸發多執行序  
  
java keybord event  
  
陳宗興 mvc  

# 2018/10/04 
# 2018/10/11
購物車三大家
WooCommerce(Wordpress)
OScommerce(Jommla)
OpenCart()


# 改PHP.ini
max_execution_time=120
memory_limit=512M

# 2018/10/12

### 改category限制
cart\admin\controller\catalog\category.php
621行 limit
category  

### 可能會遇見的修改OpenCart修改  
增加會員等級分類功能  
修改會員點數或折扣方式  
修改成捐款網站  

# 2018/10/16
6大js框架
ext
dojo
vue
angular
react
node

Enity framework

# 2018/10/19
juypter notebook
shift+tab  



# 2019/1/29
Jquery範例說明
http://jsgears.com/thread-63-1-1.html


https://developer.mozilla.org/zh-TW/docs/Learn  