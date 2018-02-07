<HTML>
<HEAD>
<TITLE>symlink</TITLE>
</HEAD>
<BODY>
<?
	//link moredata.txt to existing file data.txt
	if(symlink("data.txt", "moredata.txt"))
	{
		print("Symbolic link created");
	}
	else
	{
		print("Symbolic link not created");
	}
?>
</BODY>
</HTML>