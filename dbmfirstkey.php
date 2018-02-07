<HTML>
<HEAD>
<TITLE>dbmfirstkey</TITLE>
</HEAD>
<BODY>
<?
	// open database 
	$db = dbmopen("inventory", "r");

	print("<TABLE BORDER=\"1\">\n");
	print("<TR><TH>Key</TH><TH>Value</TH></TR>");
	// dump database 
	for($key = dbmfirstkey($db);
		$key; 
		$key = dbmnextkey($db, $key))
	{
		$value = dbmfetch($db, $key);
		print("<TR>\n");
		print("<TD>$key</TD>\n");
		print("<TD>$value</TD>\n");
		print("</TR>\n");
	}

	print("</TABLE>\n");
	
	// close database 
	dbmclose($db);
?>
</BODY>
</HTML>