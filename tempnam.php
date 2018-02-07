<HTML>
<HEAD>
<TITLE>tempnam</TITLE>
</HEAD>
<BODY>
<?
	$myFile = tempnam("/tmp/corephp", "data");
	if(strlen($myFile) > 0)
	{
		print($myFile);
	}
	else
	{
		print("Couldn't make temporary name");
	}
?>
</BODY>
</HTML>