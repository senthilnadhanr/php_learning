<HTML>
<HEAD>
<TITLE>flush</TITLE>
</HEAD>
<BODY>
<?
	//simulate long calculation
	//flush output buffer with each step
	for($n=0; $n<5; $n++)
	{
		print("Calculating...<BR>\n");
		flush();
		sleep(3);
	}
	print("Finished!<BR>\n");
?>
</BODY>
</HTML>