<HTML>
<HEAD>
<TITLE>dir</TITLE>
</HEAD>
<BODY>
<?
	// print the current directory in unordered list
	print("<UL>\n");

	// open directory
	$myDirectory = dir(".");

	// get each entry
	while($entryName = $myDirectory->read())
	{
			print("<LI>$entryName \n");
	}

	// close directory
	$myDirectory->close();

	print("</UL>\n");
?>
</BODY>
</HTML>