<HTML>
<HEAD>
<TITLE>gzgets</TITLE>
</HEAD>
<BODY>
<?
	// open file and print each line
	if($myFile = gzopen("data.gz", "r"))
	{
		while(!gzeof($myFile))
		{
			$myLine = gzgets($myFile, 255);
			print($myLine);
		}

		gzclose($myFile);
	}	
?>
</BODY>
</HTML>