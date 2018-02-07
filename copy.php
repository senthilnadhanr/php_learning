<HTML>
<HEAD>
<TITLE>copy</TITLE>
</HEAD>
<BODY>
<?
	if(copy("data.txt", "/tmp/data.txt"))
	{
		print("data.txt copied to /tmp");
	}
	else
	{
		print("data.txt could not be copied");
	}
?>
</BODY>
</HTML>