<HTML>
<HEAD>
<TITLE>fgetc</TITLE>
</HEAD>
<BODY>
<?
	// open file and print each character
	if($myFile = fopen("data.txt", "r"))
	{
		while(!feof($myFile))
		{
			$myCharacter = fgetc($myFile);
			print($myCharacter);
		}

		fclose($myFile);
	}	
?>
</BODY>
</HTML>