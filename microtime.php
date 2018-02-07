<HTML>
<HEAD>
<TITLE>microtime</TITLE>
</HEAD>
<BODY>
<?
	//print microtime
	print("Start:". microtime() . "<BR>\n");

	//sleep for a random time
	usleep(rand(100,5000));

	//print microtime
	print("Stop: " . microtime() . "<BR>\n");
?>
</BODY>
</HTML>