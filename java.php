<HTML>
<HEAD>
<TITLE>Java</TITLE>
</HEAD>
<BODY>
<?
	/*
	** Adapted from Sam Ruby's example
	*/

	//get version of Java
	$system = new Java("java.lang.System");
	print("Java version: " . 
		$system->getProperty("java.version") . 
		"<BR>\n");
	
	//print formatted date
	$formatter = new Java("java.text.SimpleDateFormat",
		"EEEE, MMMM dd, yyyy 'at' h:mm:ss a zzzz");
	print($formatter->format(new Java("java.util.Date")) . "<BR>\n");
?>
</BODY>
</HTML>