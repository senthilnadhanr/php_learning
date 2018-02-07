<HTML>
<HEAD>
<TITLE>ora_exec</TITLE>
</HEAD>
<BODY>
<?
	//in case these aren't set for httpd
	putenv("ORACLE_HOME=/usr/local/oracle7");
	putenv("ORACLE_SID=ORCL");

	function reportError($id, $message)
	{
		print("$message<BR>\n");

		print("Error Code: " . ora_errorcode($id) . "<BR>\n");
		print("Error Message: " . ora_error($id) . "<BR>\n");
	}


	//connect to server
	if(!($Connection = ora_logon("scott", "tiger")))
	{
		print("Could not connect to database!<BR>\n");
		exit;
	}

	//open cursor
	if(!($Cursor = ora_open($Connection)))
	{
		reportError($Connection, "Cursor could not be opened!");
		exit;
	}

	$Query = "SELECT * ";
	$Query .= "FROM emp ";

	//parse query
	if(!ora_parse($Cursor, $Query))
	{
		reportError($Cursor, "Statement could not be parsed!");
		exit;
	}

	// execute query
	if(!ora_exec($Cursor))
	{
		reportError($Cursor, "Statement could not be executed!");
		exit;
	}

	//start table
	print("<TABLE BORDER=\"1\">\n");

	//print header row that describes each column
	print("<TR>\n");

	for($i = 0; $i < ora_numcols($Cursor); $i++)
	{
		print("<TH>");

		// get column info
		print(ora_columnname($Cursor, $i) . ": ");
		print(ora_columntype($Cursor, $i) . " ");
		print("(" . ora_columnsize($Cursor, $i) . ")");

		print("</TH>\n");
	}

	print("</TR>\n");

	//  get each row
	while(ora_fetch($Cursor))
	{
		print("<TR>\n");

		//loop over each column
		for($i = 0; $i < ora_numcols($Cursor); $i++)
		{
			print("<TD>");

			// get column
			print(ora_getcolumn($Cursor, $i));

			print("</TD>\n");
		}

		print("</TR>\n");

	}

	//close table
	print("</TABLE>\n");

	print("<BR>\n");
	print("Rows: " . ora_numrows($Cursor));
	print("<BR>\n");

	// Close the Oracle cursor
	ora_close($Cursor);

	// disconnect.
	ora_logoff($Connection);
?>
</BODY>
</HTML>