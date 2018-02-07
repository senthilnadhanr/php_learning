<HTML>
<HEAD>
<TITLE>gzgetc</TITLE>
</HEAD>
<BODY>
<?
	// open compressed file and print each character
	if($myFile = gzopen("data.gz", "r"))
	{
		while(!gzeof($myFile))
		{
			$myCharacter = gzgetc($myFile);
			print($myCharacter);
		}

		gzclose($myFile);
	}	
?>
</BODY>
</HTML>