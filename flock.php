<HTML>
<HEAD>
<TITLE>flock</TITLE>
</HEAD>
<BODY>
<?
	$fp = fopen("log.txt", "a");

	//get lock
	flock($fp, 2);

	//add a line to the log
	fputs($fp, date("h:i A l F dS, Y\n"));

	//release lock
	flock($fp, 3);

	fclose($fp);
	
	//dump log
	print("<PRE>");
	readfile("log.txt");
	print("</PRE>\n");
?>
</BODY>
</HTML>