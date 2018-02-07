<HTML>
<HEAD>
<TITLE>getservbyport</TITLE>
</HEAD>
<BODY>
<?
	//check which service uses port 25
	$service = getservbyport(25, "tcp");
	
	print("$service<BR>\n");
?>
</BODY>
</HTML>