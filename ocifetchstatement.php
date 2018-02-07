<HTML>
<HEAD>
<TITLE>ocifetchstatement</TITLE>
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
	
	print("<TABLE>\n");

	//fetch all rows into array
	if($Rows = ocifetchstatement($Statement, &$Data))
	{
		while(list($key, $value) = each($Data))
		{
			print("<TR>\n");

			//name of column
			print("<TH>$key</TH>\n");
			
			//print data
			for($i=0; $i < $Rows; $i++)
			{
				print("<TD>$value[$i]</TD>\n");
			}
		
			print("</TR>\n");
		}
	}

	print("</TABLE>\n");
	
	//free the statement
	ocifreestatement($Statement);
	
	//close connection
	ocilogoff($Connection);
?>
</BODY>
</HTML>