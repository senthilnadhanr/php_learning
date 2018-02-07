<HTML>
<HEAD>
<TITLE>rewind</TITLE>
</HEAD>
<BODY>
<?
	/* 
	** print a file, then print the first line again
	*/

	// open a local file
	$myFile = fopen("data.txt", "r");

	while(!feof($myFile))
	{
		// read a line from the file
		$myLine = fgetss($myFile, 255);
		print("$myLine <BR>\n");
	}

	rewind($myFile);
	$myLine = fgetss($myFile, 255);
	print("$myLine <BR>\n");

	// close the file
	fclose($myFile);
?>
</BODY>
</HTML>