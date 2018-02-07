<HTML>
<HEAD>
<TITLE>ifx_create_blob</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	if(!($dbLink = ifx_pconnect("mydb@ol_srv1", "leon", "secret"))
	{
		print("Unable to connect!<BR>\n");
		exit();	
	}

	//create blob and add to array
	$blob[] = ifx_create_blob(0, 0, "This is a message");
	
	//insert message	
	$Query = "INSERT INTO message  " .
		"VALUES (3,'My Title', ?)";

	if(!($result = ifx_query($Query, $dbLink, $blob))
	{
		print("Unable to insert message!<BR>\n");

		//print Informix error message
		print(ifx_error() . "<BR>\n");
		print(ifx_errormsg() . "<BR>\n");
	}

	//free result identifier	
	ifx_free_result($result);

	//close connection
	ifx_close($dbLink);
?>
</BODY>
</HTML>


