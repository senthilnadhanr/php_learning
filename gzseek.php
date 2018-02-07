<HTML>
<HEAD>
<TITLE>gzseek</TITLE>
</HEAD>
<BODY>
<?
	// open a file
	if(!($myFile = gzopen("data.gz", "r")))
	{
		print("file could not be opened");
		exit;
	}

	// jump 32 bytes into the file
	gzseek($myFile, 32);

	$myLine = gzgets($myFile, 255);
	print($myLine);

	// dump the rest of the file
	gzpassthru($myFile);

?>
</BODY>
</HTML>