<HTML>
<HEAD>
<TITLE>gztell</TITLE>
</HEAD>
<BODY>
<?
	// open a file
	if(!($myFile = gzopen("data.gz", "r")))
	{
		print("file could not be opened");
		exit;
	}

	$myLine = gzgets($myFile, 255);
	print($myLine);

	print("<HR>\n");
	print("File pointer at " . gztell($myFile) . " bytes");

	// close file
	gzclose($myFile);

?>
</BODY>
</HTML>