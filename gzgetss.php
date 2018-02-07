<HTML>
<HEAD>
<TITLE>gzgetss</TITLE>
</HEAD>
<BODY>
<?
	// open compressed file and print each line
	if($myFile = gzopen("data.gz", "r"))
	{
		while(!gzeof($myFile))
		{
			$myLine = gzgetss($myFile, 255);
			print($myLine);
		}

		gzclose($myFile);
	}	
?>
</BODY>
</HTML>