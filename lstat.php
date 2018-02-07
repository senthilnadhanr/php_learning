<HTML>
<HEAD>
<TITLE>lstat</TITLE>
</HEAD>
<BODY>
<?
	/* 
	** print stat information based on OS 
	*/

	// get stat information
	$statInfo = lstat("data.txt");

	if(eregi("windows", $OS))
	{
		// print useful information for Windows
		printf("Drive: %c <BR>\n", ($statInfo[0]+65));
		printf("Mode: %o <BR>\n", $statInfo[2]); 
		print("Links: $statInfo[3] <BR>\n"); 
		print("Size: $statInfo[7] bytes<BR>\n");
		printf("Last Accessed: %s <BR>\n", 
			date("H:i:s F d, Y", $statInfo[8]));
		printf("Last Modified: %s <BR>\n", 
			date("H:i:s F d, Y", $statInfo[9]));
		printf("Created: %s <BR>\n", 
			date("H:i:s F d, Y", $statInfo[10]));
	}
	else
	{
		// print UNIX version
		print("Device: $statInfo[0] <BR>\n");
		print("INode: $statInfo[1] <BR>\n"); 
		printf("Mode: %o <BR>\n", $statInfo[2]); 
		print("Links: $statInfo[3] <BR>\n"); 
		print("UID: $statInfo[4] <BR>\n"); 
		print("GID: $statInfo[5] <BR>\n"); 
		print("Device Type: $statInfo[6] <BR>\n");
		print("Size: $statInfo[7] bytes<BR>\n");
		printf("Last Accessed: %s <BR>\n", 
			date("H:i:s F d, Y", $statInfo[8]));
		printf("Last Modified: %s <BR>\n", 
			date("H:i:s F d, Y", $statInfo[9]));
		printf("Last Changed: %s <BR>\n", 
			date("H:i:s F d, Y", $statInfo[10]));
		print("Block Size: $statInfo[11] <BR>\n");
		print("Blocks: $statInfo[12] <BR>\n");
	}
?>
</BODY>
</HTML>
