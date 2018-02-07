<HTML>
<HEAD>
<TITLE>is_file</TITLE>
</HEAD>
<BODY>
<?
	$filename = "data.txt";
	
	if(is_file($filename))
	{
		print("$filename is a file");
	}
	else
	{
		print("$filename is not a file");
	}
?>
</BODY>
</HTML>