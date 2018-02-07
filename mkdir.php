<HTML>
<HEAD>
<TITLE>mkdir</TITLE>
</HEAD>
<BODY>
<?
	if(mkdir("myDir", 0777))
	{
		print("directory created");
	}
	else
	{
		print("directory cannot be created");
	}
?>
</BODY>
</HTML>