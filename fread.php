<HTML>
<HEAD>
<TITLE>fread</TITLE>
</HEAD>
<BODY>
<?
	/*
	** Check that a file is a GIF89
	*/

	$filename = "php.gif";

	$fp = fopen($filename, "r");
	
	//get first 128 bytes
	$data = fread($fp, 128);

	//close file
	fclose($fp);
	
	//check for GIF89
	if(substr($data, 0, 5) == "GIF89")
	{
		print("$filename is a GIF89 file.\n");
	}
	else
	{
		print("$filename isn't a GIF89 file.\n");
	}	
?>
</BODY>
</HTML>