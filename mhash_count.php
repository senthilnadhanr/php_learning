<HTML>
<HEAD>
<TITLE>mhash_count</TITLE>
</HEAD>
<BODY>
<?
	print("<TABLE BORDER=\"1\">\n");

	print("<TR>\n");
	print("<TH>Algorithm</TH>\n");
	print("<TH>Block Size</TH>\n");
	print("</TR>\n");

	for($i=0; $i <= mhash_count(); $i++)
	{
		print("<TR>\n");
		print("<TD>MHASH_" . mhash_get_hash_name($i) . "</TD>\n");
		print("<TD>" . mhash_get_block_size($i) . "</TD>\n");
		print("</TR>\n");
	}

	print("</TABLE>\n");
?>
</BODY>
</HTML>