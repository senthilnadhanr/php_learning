<HTML>
<HEAD>
<TITLE>unlink</TITLE>
</HEAD>
<BODY>
<?
	if(unlink("data2.txt"))
	{
		print("data2.txt deleted");
	}
	else
	{
		print("data2.txt could not be deleted");
	}
?>
</BODY>
</HTML>