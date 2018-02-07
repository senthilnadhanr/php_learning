<HTML>
<HEAD>
<TITLE>gzrewind</TITLE>
</HEAD>
<BODY>
<?
	/* 
	** print a file, then print the first line again
	*/

	// open a local file
	if(!($myFile = gzopen("data.gz", "r")))
	{
		print("file could not be opened");
		exit;
	}

	while(!gzeof($myFile))
	{
		// read a line from the file
		$myLine = gzgetss($myFile, 255);
		print("$myLine <BR>\n");
	}

	gzrewind($myFile);
	$myLine = gzgetss($myFile, 255);
	print("$myLine <BR>\n");

	// close the file
	gzclose($myFile);
?>
</BODY>
</HTML>