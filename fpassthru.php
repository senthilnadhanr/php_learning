<?
	/*
	** Get a Web page, change the title tag
	*/

	// open a file using http protocol
	if(!($myFile = fopen("http://www.clearink.com/", "r")))
	{
		print("file could not be opened");
		exit;
	}

	$KeepSearching = TRUE;
	
	while(!feof($myFile) AND $KeepSearching)
	{
		// read a line from the file
		$myLine = fgets($myFile, 1024);
		
		//watch for body tag
		if(eregi("<body", $myLine))
		{
			//no chance to find a title tag
			//after a body tag
			$KeepSearching = FALSE;
		}
		
		//try adding some text after the title tag
		$myLine = eregi_replace("<title>", "<title>(fpassthru example)", $myLine);

		//send line to browser
		print("$myLine");
	}

	// send the rest of file to browser
	fpassthru($myFile);
?>
