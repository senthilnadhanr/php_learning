<HTML>
<HEAD>
<TITLE>posix_getrlimit</TITLE>
</HEAD>
<BODY>
<?
	foreach(posix_getrlimit() as $key=>$value)
	{
		print("$key: $value<BR>\n");
	}
?>
</BODY>
</HTML>