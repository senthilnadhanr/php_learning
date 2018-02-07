<HTML>
<HEAD>
<TITLE>ftell</TITLE>
</HEAD>
<BODY>
<?
	// open a file
	if($myFile = fopen("data.txt", "r"))
	{
		//read characters until we find a space
		$c = "";
		while(!(feof($myFile)) AND ($c != " "))
		{
			$c = fgetc($myFile);
		}

		print("File pointer at " . ftell($myFile) . " bytes");
	}
	else
	{
		print("file could not be opened");
	}
?>
</BODY>
</HTML>