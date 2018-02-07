<HTML>
<HEAD>
<TITLE>fseek</TITLE>
</HEAD>
<BODY>
<?
	// open a file
	if($myFile = fopen("data.txt", "r"))
	{
		// jump 32 bytes into the file
		fseek($myFile, 32);
	
		// dump the rest of the file
		fpassthru($myFile);
	}
	else
	{
		print("file could not be opened");
	}
?>
</BODY>
</HTML>