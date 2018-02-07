<HTML>
<HEAD>
<TITLE>posix_uname</TITLE>
</HEAD>
<BODY>
<?
	foreach(posix_uname() as $key=>$value)
	{
		print("$key: $value<BR>\n");
	}
?>
</BODY>
</HTML>