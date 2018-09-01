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
  
vue.js  


奇同位元檢查與偶同位元檢查

霍夫曼編碼樹

網頁照片要放幾乘幾的大小？
APP的ICON的大小事多少？

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
1.改Xampp控制台Apache的config的`root的路徑`  
2.改Dreamweaver設定  
網站管理>伺服器  
伺服器名稱：`xampp(自訂)`  
連線方式：選`本機/網路`  
伺服器資料夾：`網站目錄`  
Web URL：`http://localhost/`  
  
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