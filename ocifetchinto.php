<HTML>
<HEAD>
<TITLE>ocifetchinto</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	$Connection = ocilogon("scott", "tiger");
	
	//assemble query
	$Query = "SELECT * ";
	$Query .= "FROM emp ";
	
	//parse query
	$Statement = ociparse($Connection, $Query);
	
	//execute query
	ociexecute($Statement);
	
	//check that the query executed sucessfully
	if($Error = ocierror($Statement))
	{
		print($Error["code"] . ": " . $Error["message"] . "<BR>\n");
		exit;
	}

	//start HTML table
	print("<TABLE>\n");

	
	//fetch each row
	while(ocifetchinto($Statement, $Data, 
		OCI_NUM + OCI_RETURN_NULLS + OCI_RETURN_LOBS)) 
	{
		print("<TR>\n");

		//loop over each column
		while(list($key, $value) = each($Data))
		{
			//print a line like "<TD>SMITH</TD>"
			print("<TD>$value</TD>\n");
		}

		print("</TR>\n");
	}

	//close table
	print("</TABLE>\n");
	
	//free the statement
	ocifreestatement($Statement);
	
	//close connection
	ocilogoff($Connection);
?>
</BODY>
</HTML>