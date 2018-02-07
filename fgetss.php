<HTML>
<HEAD>
<TITLE>fgetss</TITLE>
</HEAD>
<BODY>
<PRE>
<?
	// open file and print each line,
	//stripping HTML except for anchor tags
	if($myFile = fopen("index.html", "r"))
	{
		while(!feof($myFile))
		{
			$myLine = fgetss($myFile, 1024, "<A>");
			print($myLine);
		}
		fclose($myFile);
	}	
?>
</PRE>
</BODY>
</HTML>