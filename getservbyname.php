<HTML>
<HEAD>
<TITLE>getservbyname</TITLE>
</HEAD>
<BODY>
<?
	//check which port ftp uses
	$port = getservbyname("ftp", "tcp");
	
	print("port $port<BR>\n");
?>
</BODY>
</HTML>