<HTML>
<HEAD>
<TITLE>gzfile</TITLE>
</HEAD>
<BODY>
<?
	// open file and print each line
	$myFile = gzfile( "data.gz");
	for($index = 0; $index < count($myFile); $index++)
	{
		print($myFile[$index]);
	}
?>
</BODY>
</HTML>