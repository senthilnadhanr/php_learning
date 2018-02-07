<HTML>
<HEAD>
<TITLE>rmdir</TITLE>
</HEAD>
<BODY>
<?
	if(rmdir("/tmp/leon"))
	{
		print("Directory removed");
	}
	else
	{
		print("Directory not removed");
	}
?>
</BODY>
</HTML>