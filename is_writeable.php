<HTML>
<HEAD>
<TITLE>is_writeable</TITLE>
</HEAD>
<BODY>
<?
	$filename = "data.txt";
	
	if(is_writeable($filename))
	{
		print("$filename is writeable");
	}
	else
	{
		print("$filename is not writeable");
	}
?>
</BODY>
</HTML>