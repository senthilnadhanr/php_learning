<HTML>
<HEAD>
<TITLE>gethostbynamel</TITLE>
</HEAD>
<BODY>
<?
	$hosts = gethostbynamel("www.microsoft.com");
	for($index = 0; $index < count($hosts); $index++)
	{
		print("$hosts[$index] <BR>\n");
	}
?>
</BODY>
</HTML>