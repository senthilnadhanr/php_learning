<HTML>
<HEAD>
<TITLE>is_readable</TITLE>
</HEAD>
<BODY>
<?
	$filename = "data.txt";
	
	if(is_readable($filename))
	{
		print("$filename is readable");
	}
	else
	{
		print("$filename is not readable");
	}
?>
</BODY>
</HTML>