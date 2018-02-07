<HTML>
<HEAD>
<TITLE>ereg</TITLE>
</HEAD>
<BODY>
<?
	// show User Agent
	print("User Agent: $HTTP_USER_AGENT<BR>\n");

	// try to parse User Agent
	if(ereg("^(.+)/([0-9])\.([0-9]+)", 
		$HTTP_USER_AGENT, $matches))
	{
		print("Full match: $matches[0]<BR>\n");
		print("Browser: $matches[1]<BR>\n");
		print("Major Version: $matches[2]<BR>\n");
		print("Minor Version: $matches[3]<BR>\n");
	}
	else
	{
		print("User Agent not recognized");
	}
?>
</BODY>
</HTML>