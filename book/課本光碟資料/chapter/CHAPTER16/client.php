<?php
print "�A��IP��}�O:";
print getenv("REMOTE_ADDR");
print "<BR>";
print "�A�������W�٬O:";
print gethostbyaddr(getenv("REMOTE_ADDR"));
print "<BR>";
print "�A���s�����O:";
print getenv("HTTP_USER_AGENT");
print "<BR>�o�˨S���a�I";
?>
