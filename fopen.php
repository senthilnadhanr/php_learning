<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?
	print("<H1>HTTP</H1>\n");

	//open a file using http protocol
	//Use username and password 
	if(!($myFile = fopen("http://leon:password@www.clearink.com/", "r")))
	{
		print("file could not be opened");
		exit;
	}

	while(!feof($myFile))
	{
		// read a line from the file
		$myLine = fgetss($myFile, 255);
		print("$myLine <BR>\n");
	}

	// close the file
	fclose($myFile);

	print("<H1>FTP</H1>\n");
 	print("<HR>\n");

	// open a file using ftp protocol
	if(!($myFile = fopen("ftp://ftp.php.net/welcome.msg", "r")))
	{
		print("file could not be opened");
		exit;
	}

	while(!feof($myFile))
	{
		// read a line from the file
		$myLine = fgetss($myFile, 255);
		print("$myLine <BR>\n");
	}

	// close the file
	fclose($myFile);

	print("<H1>Local</H1>\n");
 	print("<HR>\n");

	// open a local file
	if(!($myFile = fopen("data.txt", "r")))
	{
		print("file could not be opened");
		exit;
	}

	while(!feof($myFile))
	{
		// read a line from the file
		$myLine = fgetss($myFile, 255);
		print("$myLine <BR>\n");
	}

	// close the file
	fclose($myFile);
?>
</BODY>
</HTML>