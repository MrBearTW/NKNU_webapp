<?php
print "你的IP位址是:";
print getenv("REMOTE_ADDR");
print "<BR>";
print "你的本機名稱是:";
print gethostbyaddr(getenv("REMOTE_ADDR"));
print "<BR>";
print "你的瀏覽器是:";
print getenv("HTTP_USER_AGENT");
print "<BR>這樣沒錯吧！";
?>
