<HTML>
<HEAD>
<TITLE>filegroup</TITLE>
</HEAD>
<BODY>
<?php
	print( posix_getgrgid(filegroup("data.txt")));
?>
</BODY>
</HTML>