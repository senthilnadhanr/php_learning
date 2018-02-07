<HTML>
<HEAD>
<TITLE>fclose</TITLE>
</HEAD>
<BODY>
<?
	// open file for reading
	$myFile = fopen("data.txt","r");

	// make sure the open was successful
	if(!($myFile))
	{
		print("file could not be opened");
		exit;
	}

	while(!feof($myFile))
	{
		// read a line from the file
		$myLine = fgets($myFile, 255);
		print("$myLine <BR>\n");
	}

	// close the file
	fclose($myFile);
?>
</BODY>
</HTML>