<HTML>
<HEAD>
<TITLE>pg_fetch_row</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	if(!($Connection = pg_connect("", "", "", "", "leon")))
	{
		print("Could not establish connection.<BR>\n");
		exit;
	}

	//create query
	$Query = "SELECT * ";
	$Query .= "FROM item";

	//execute query 
	if(!($Result = pg_exec($Connection, $Query)))
	{
		print("Could not execute query: ");
		print(pg_errormessage($Connection));
		print("<BR>\n");
		exit;
	}

	//loop over each row
	while($Row = pg_fetch_row($Result, $Row))
	{
		print("$Row[0]<BR>\n");
	}
	
	// free the result and close the connection 
	pg_freeresult($Result);
	pg_close($Connection);
?>
</BODY>
</HTML>