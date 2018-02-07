<HTML>
<HEAD>
<TITLE>getmxrr</TITLE>
</HEAD>
<BODY>
<?
	//get mail-exchanger records for clearink.com
	getmxrr("clearink.com", $mxrecord, $weight);
	
	//display results
	for($index=0; $index < count($mxrecord); $index++)
	{
		print($mxrecord[$index]);
		print(" - ");
		print($weight[$index]);
		print("<BR>\n");
	}
?>
</BODY>
</HTML>