<HTML>
<HEAD>
<TITLE>opendir</TITLE>
</HEAD>
<BODY>
<?
	// print the current directory in a table
	print("<TABLE BORDER=\"1\">\n");

	// create header row
	print("<TR>\n");
	print("<TH>Filename</TH>\n");
	print("<TH>File Size</TH>\n");
	print("</TR>\n");

	// open directory 
	$myDirectory = opendir(".");

	// get each entry
	while($entryName = readdir($myDirectory))
	{
		print("<TR>");
		print("<TD>$entryName</TD>");
		print("<TD ALIGN=\"right\">");
		print(filesize($entryName));
		print("</TD>");
		print("</TR>\n");
	}

	// close directory
	closedir($myDirectory);
	
	print("</TABLE>\n");
?>
</BODY>
</HTML>