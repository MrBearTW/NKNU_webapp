DNS

IIS
裝C++套件
裝PHP
裝MySQL

mail server
PORT
25

c 沒有分頁
d 有分頁


# 2018/10/8
IIS在個人系統內叫做PWS個人網站  
PWS只能架一個網站  
WIN7810應該都有  
  
假如在WIN7裝PHP和MSQL
會缺一個檔案libnysql.dll
放在PHP5中和php-cgi.exe放在一起
  
squirrelmail是LINUX出的PHP郵件系統  
web

# 裝mail server
要有兩個網域  


mail domain

IMAP不要啟動  
ClamAV LINUX ClamWIN Windows  

A 8 255 0 0 0
B 16 255 255 0 0 
C 24 255 255 255 0

##
裝PHP之前要先裝VC++  
確認有PHP.ini  
修正TEMP路徑  

處理常式路徑設定


## 2018/10/25
系統管理事件

VSS


聯繫root

轉寄站

本機安全性原則

使用可還原的加密來存放密碼(不應該開啟)

密碼歷程 多久不能換密碼  

本機安全性原則  

查看同網段所有電腦`net view`

## 設定排程
先退到C:\
`e:`切換到e槽
`copy con web.bat`
`net stop W3SVC`shift + F6

服務檢查W3SVC

工作排程器

透過指令不能執行system32內的檔案
cd c:Windows\System32
copy shoutdown.exe c:\
cd c:\
copy con shoutdown.bat
`shoutdown.exe /r /f /t 10 /d p:0:0`shift + F6