<HTML>
<HEAD>
<TITLE>gzputs</TITLE>
</HEAD>
<BODY>
<?
	// open file for writing
	// use maximum compress and force
	// Huffman encoding only
	$myFile = gzopen("data.gz", "wb9h");

	// make sure the open was successful
	if(!($myFile))
	{
		print("file could not be opened");
		exit;
	}
	
	for($index=0; $index<10; $index++)
	{
		// write a line to the file
		gzputs($myFile, "line $index\n");
	}

	// close the file
	gzclose($myFile);
?>
</BODY>
</HTML>