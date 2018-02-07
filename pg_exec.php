<HTML>
<HEAD>
<TITLE>pg_exec</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	if(!($Connection = pg_connect("", "", "", "", "leon")))
	{
		print("Could not establish connection.<BR>\n");
		exit;
	}

	//print information about connection
	print("Connection established<BR>\n");
	print("Host: " . pg_host($Connection) . "<BR>\n");
	print("Port: " . pg_port($Connection) . "<BR>\n");
	print("Database: " . pg_dbname($connection) . "<BR>\n");
	print("Options: " . pg_options($connection) . "<BR>\n");
	print("TTY: " . pg_tty($connection) . "<BR>\n");
	print("<BR>\n");

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


	// print each row in a table 
	print("<TABLE>\n");

	// print header row 
	print("<TR>\n");

	for($Field=0; $Field < pg_numfields($Result); $Field++)
	{
		print("<TD>");

		print(pg_fieldname($Result, $Field) . " ");
		print(pg_fieldtype($Result, $Field));
		print("(" . pg_fieldsize($Result, $Field) . ")");
		
		print("</TD>\n");
	}
	print("</TR>\n");

	//loop through rows
	for($Row=0; $Row < pg_numrows($Result); $Row++)
	{
		print("<TR>\n");
		
		for($Field=0; $Field < pg_numfields($Result); $Field++)
		{
			print("<TD>");

			if(pg_fieldisnull($Result, $Row, $Field))
			{
				$price = "NULL";
			}
			else
			{
				print(pg_result($Result, $Row, $Field));
			}

			print("</TD>\n");
		}
		
		print("</TR>\n");
	}

	print("</TABLE>\n");

	// free the result and close the connection 
	pg_freeresult($Result);
	pg_close($Connection);
?>
</BODY>
</HTML>