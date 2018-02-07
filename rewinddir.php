<HTML>
<HEAD>
<TITLE>rewinddir</TITLE>
</HEAD>
<BODY>
<?
	/* 
	** print the current directory in a table 
	*/
	print("<TABLE BORDER=\"1\">\n");

	// open directory
	$myDirectory = opendir(".");

	print("<TR>\n");
	print("<TH>Filename</TH>\n");

	// get each entry
	while($entryName = readdir($myDirectory))
	{
		print("<TD>$entryName</TD>\n");
	}

	print("</TR>\n");

	// Go back to beginning
	rewinddir($myDirectory);

	print("<TR>\n");
	print("<TH>Size</TH>\n");

	// get each entry
	while($entryName = readdir($myDirectory))
	{
		print("<TD ALIGN=\"right\">");
		print(filesize($entryName));
		print("</TD>\n");
	}
	print("</TR>\n");

	// close directory
	closedir($myDirectory);
	
	print("</TABLE>\n");
?>
</BODY>
</HTML>