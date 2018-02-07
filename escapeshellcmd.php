<HTML>
<HEAD>
<TITLE>escapeshellcmd</TITLE>
</HEAD>
<BODY>
<?
	$cmd = "echo 'potentially; bad text'";
	$cmd = escapeshellcmd($cmd);
	
	print("Trying $cmd <BR>\n");
	
	print("<PRE>");
	system($cmd);
	print("</PRE>");
?>
</BODY>
</HTML>