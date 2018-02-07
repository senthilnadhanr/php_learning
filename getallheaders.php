<HTML>
<HEAD>
<TITLE>getallheaders</TITLE>
</HEAD>
<BODY>
<?
	//start table
	print("<TABLE BORDER=\"1\">\n");
	print("<TR>\n");
	print("<TH>Header</TH>\n");
	print("<TH>Value</TH>\n");
	print("</TR>\n");
	
	//loop over headers
	foreach(getallheaders() as $header=>$value)
	{
		print("<TR>\n");
		print("<TD>$header</TD>\n");
		print("<TD>$value</TD>\n");
		print("</TR>\n");
	}

	//close table
	print("</TABLE>\n");
?>
</BODY>
</HTML>