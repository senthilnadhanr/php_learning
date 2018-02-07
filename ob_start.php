<?
	//begin output buffering
	ob_start();
?>
<HTML>
<HEAD>
<TITLE>ob_start</TITLE>
</HEAD>
<BODY>
<?
	print("At this point ");
	print(strlen(ob_get_contents()));
	print(" characters are in the buffer.<BR>\n");
?>
</BODY>
</HTML>
<?
	//add a test header
	header("X-note: COREPHP");

	//dump the contents
	ob_end_flush();
?>
