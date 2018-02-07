<HTML>
<HEAD>
<TITLE>exec</TITLE>
</HEAD>
<BODY>
<?php
	// get directory list for the root of C drive
	$LastLine = exec("dir C:\\", $AllOutput, $ReturnValue);
	
	print("Last Line: $LastLine <BR>\n");

	print("All Output:<BR>\n");
	for($index = 0; $index < count($AllOutput); $index++)
	{
		print("$AllOutput[$index] <BR>\n");
	}
	print("<BR><BR>\n");

	print("Return Value: $ReturnValue<BR>\n");
?>
</BODY>
</HTML>