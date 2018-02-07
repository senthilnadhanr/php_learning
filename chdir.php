<HTML>
<HEAD>
<TITLE>chdir</TITLE>
</HEAD>
<BODY>
<?
	if(chdir("/tmp"))
	{
		print("current directory is /tmp");
	}
	else
	{
		print("unable to change to /tmp");
	}
?>
</BODY>
</HTML>
