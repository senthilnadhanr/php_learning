<HTML>
<HEAD>
<TITLE>ocifetch</TITLE>
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

	//build headers from column information
	print("<TR>\n");
	for($i=1; $i <= ocinumcols($Statement); $i++)
	{
		print("<TH>");
		
		//print a line like "<TH>ENAME VARCHAR2(10)</TH>"
		print(ocicolumnname($Statement, $i) . " ");
		print(ocicolumntype($Statement, $i));
		print("(" . ocicolumnsize($Statement, $i) . ")");
		
		print("</TH>\n");
	}
	print("</TR>\n");
    
	
	//fetch each row
	while(ocifetch($Statement)) 
	{
		print("<TR>\n");

		//loop over each column
		for($i=1; $i <= ocinumcols($Statement); $i++)
		{
			//print a line like "<TD>SMITH</TD>"
			print("<TD>");
			if(ocicolumnisnull($Statement, $i))
			{
				print("(null)");
			}
			else
			{
				print(ociresult($Statement, $i));
			}		
			print("</TD>\n");
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