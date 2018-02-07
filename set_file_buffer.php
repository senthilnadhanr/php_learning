<HTML>
<HEAD>
<TITLE>set_file_buffer</TITLE>
</HEAD>
<BODY>
<?
	// open file for writing
	$myFile = fopen("data.txt","w");

	// make sure the open was successful
	if(!($myFile))
	{
		print("file could not be opened");
		exit;
	}

	//use 1K buffer
	print(set_file_buffer($myFile, 1024));

	
	for($index=0; $index<10; $index++)
	{
		// write a line to the file
		fwrite($myFile, "line $index\n");
	}

	// close the file
	fclose($myFile);
?>
</BODY>
</HTML>