<HTML>
<HEAD>
<TITLE>closedir</TITLE>
</HEAD>
<BODY>
<?
	// print the current directory in unordered list
	print("<UL>\n");
	
	// open directory
	$myDirectory = opendir(".");
	
	// get each entry
	while($entryName = readdir($myDirectory))
	{
			print("<LI>$entryName \n");
	}
	
	// close directory
	closedir($myDirectory);
	
	print("</UL>\n");
?>
</BODY>
</HTML>