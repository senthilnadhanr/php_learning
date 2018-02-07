<HTML>
<HEAD>
<TITLE>gzpassthru</TITLE>
</HEAD>
<BODY>
<?
	// open a compressed file
	if(!($myFile = gzopen("data.html.gz", "r")))
	{
		print("file could not be opened");
		exit;
	}

	// send the entire file to browser
	gzpassthru($myFile);
?>
</BODY>
</HTML>