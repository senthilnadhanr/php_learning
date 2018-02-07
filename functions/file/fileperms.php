<HTML>
<HEAD>
<TITLE>fileperms</TITLE>
</HEAD>
<BODY>
<?php
	printf("%o", (fileperms("data.txt") & 0777));
?>
</BODY>
</HTML>