<HTML>
<HEAD>
<TITLE>addcslashes</TITLE>
</HEAD>
<BODY>
<?php
	$s = addcslashes($s, "\0..\37");
	print($s);
?>
</BODY>
</HTML>