<HTML>
<HEAD>
<TITLE>short_tags</TITLE>
</HEAD>
<BODY>
<?php
	if(short_tags(FALSE))
	{
		print("short_tags were on");
	}
?>
<!-- The following code will not be parsed by PHP --> 
<?
	print("using a short tag");
?>
</BODY>
</HTML>