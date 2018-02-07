<HTML>
<HEAD>
<TITLE>is_executable</TITLE>
</HEAD>
<BODY>
<?
	$filename = "data.txt";
	
	if(is_executable($filename))
	{
		print("$filename is executable");
	}
	else
	{
		print("$filename is not executable");
	}
?>
</BODY>
</HTML>