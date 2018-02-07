<HTML>
<HEAD>
<TITLE>fwrite</TITLE>
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