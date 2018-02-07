<HTML>
<HEAD>
<TITLE>posix_times</TITLE>
</HEAD>
<BODY>
<?
	foreach(posix_times() as $key=>$value)
	{
		print("$key: $value<BR>\n");
	}
?>
</BODY>
</HTML>