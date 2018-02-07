<HTML>
<HEAD>
<TITLE>ocinewcursor</TITLE>
</HEAD>
<BODY>
<?
	//open connection
	$Connection = ocilogon("scott", "tiger");

	//create cursor
	$Cursor = ocinewcursor($Connection);
	
	//create statement that calls a stored procedure
	$Query = "BEGIN ";
	$Query .= "docalculation(:price); ";
	$Query .= "END; ";
	$Statement = ociparse($Connection, $Query);
	
	//bind placeholder to cursor
	ocibindbyname($Statement, "price", &$Cursor, -1, OCI_B_CURSOR);

	//execute statement	
	ociexecute($Statement);
	
	//execute cursor
	ociexecute($Cursor);
	
	//loop over results in cursor
	while(ocifetchinto($Cursor, &$Results)) 
	{
		print("$Results<BR>\n");
	}
	
	//free memory for cursor
	ocifreecursor($Cursor);

	//free memory for statement
	ocifreestatement($Statement);
	
	//close connection
	ocilogoff($Connection);
?>
</BODY>
</HTML>