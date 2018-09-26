<?php
// Heading
$_['heading_title']          = '系統';

// Text
$_['text_step_2']            = '請檢查以下系統主機設置';
$_['text_install_php']       = '1. 請確認PHP設置符合下列要求<span style="color:#ADADAD;">(如有疑問，可請您的主機商協助確認)</span>';
$_['text_install_extension'] = '2. 請確認下列PHP擴充模組已安裝<span style="color:#ADADAD;">(如有疑問，可請您的主機商協助確認)</span>';
$_['text_install_db']        = '3. 請確認是否有可用的資料庫種類';
$_['text_install_file']      = '4. 請確認下列檔案的權限已設定成可寫入狀態<span style="color:#ADADAD;">(請先確定已將下列文件夾內的config-dist.php檔案更名為config.php)</span>';
$_['text_install_directory'] = '5. 請確認下列文件夾的權限已設定成可寫入狀態';
$_['text_setting']           = '名稱';
$_['text_current']           = '目前設定';
$_['text_required']          = '系統要求';
$_['text_extension']         = '名稱';
$_['text_db']            	 = '資料庫';
$_['text_db_driver']         = '資料庫程式';
$_['text_file']              = '檔案';
$_['text_directory']         = '文件夾';
$_['text_status']            = '狀態';
$_['text_version']           = 'PHP 版本';
$_['text_global']            = 'Register Globals';
$_['text_magic']             = 'Magic Quotes GPC';
$_['text_file_upload']       = 'File Uploads';
$_['text_session']           = 'Session Auto Start';
$_['text_gd']                = 'GD';
$_['text_curl']              = 'cURL';
$_['text_mcrypt']            = 'mCrypt';
$_['text_zlib']              = 'ZLIB';
$_['text_zip']               = 'ZIP';
$_['text_mbstring']          = 'mbstring';
$_['text_on']                = 'On';
$_['text_off']               = 'Off';
$_['text_writable']          = '可寫入';
$_['text_unwritable']        = '不能寫入';
$_['text_missing']           = '檔案不存在';

// Error
$_['error_version']          = '僅支援 PHP5.4 之後的版本';
$_['error_file_upload']      = '必須開啓 file_uploads 功能';
$_['error_session']          = '必須關閉 session.auto_start 功能';
$_['error_db']               = 'PHP必須啓用至少一種資料庫模組';
$_['error_gd']               = 'PHP必須啓用 GD 模組';
$_['error_curl']             = 'PHP必須啓用 CURL 模組';
$_['error_mcrypt']           = 'PHP必須啓用 mCrypt 模組';
$_['error_zlib']             = 'PHP必須啓用 ZLIB 模組';
$_['error_zip']              = 'PHP必須啓用 ZIP 模組';
$_['error_mbstring']         = 'PHP必須啓用 mbstring 模組';
$_['error_catalog_exist']    = 'config.php檔案未找到! (您需要先將檔案 config-dist.php 更名成 config.php)';
$_['error_catalog_writable'] = 'config.php 檔案必須設定成可讀寫狀態才能安裝';
$_['error_admin_exist']      = 'admin/config.php檔案未找到! (您需要先將admin目錄下的檔案config-dist.php 更名成 config.php)';
$_['error_admin_writable']   = 'admin/config.php 檔案必須設定成可讀寫狀態才能安裝';
$_['error_image']            = 'image 文件夾必須設定成可讀寫狀態才能安裝';
$_['error_image_cache']      = 'image/cache 文件夾必須設定成可讀寫狀態才能安裝';
$_['error_image_catalog']    = 'image/catalog 文件夾必須設定成可讀寫狀態才能安裝';
$_['error_cache']            = 'cache 文件夾必須設定成可讀寫狀態才能安裝';
$_['error_log']              = 'logs 文件夾必須設定成可讀寫狀態才能安裝';
$_['error_download']         = 'download 文件夾必須設定成可讀寫狀態才能安裝';
$_['error_upload']           = 'upload 文件夾必須設定成可讀寫狀態才能安裝';
$_['error_modification']     = 'modification 文件夾必須設定成可讀寫狀態才能安裝';