<HTML>
<HEAD>
<TITLE>is_dir</TITLE>
</HEAD>
<BODY>
<?
	$filename = "data.txt";
	
	if(is_dir($filename))
	{
		print("$filename is a directory");
	}
	else
	{
		print("$filename is not a directory");
	}
?>
</BODY>
</HTML>