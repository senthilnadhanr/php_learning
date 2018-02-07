<HTML>
<HEAD>
<TITLE>fgets</TITLE>
</HEAD>
<BODY>
<?
	// open file and print each line
	if($myFile = fopen("data.txt", "r"))
	{
		while(!feof($myFile))
		{
			$myLine = fgets($myFile, 255);
			print($myLine);
		}
		fclose($myFile);
	}	
?>
</BODY>
</HTML>