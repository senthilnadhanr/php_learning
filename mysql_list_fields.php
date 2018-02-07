<HTML>
<HEAD>
<TITLE>mysql_list_fields</TITLE>
</HEAD>
<BODY>
<?
	//connect to server 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//get list of fields 
	$dbResult = mysql_list_fields("freetrade", "invoice", $dbLink);

	//start HTML table
	print("<TABLE>\n");
	print("<TR>\n");
	print("<TH>Name</TH>\n");
	print("<TH>Type</TH>\n");
	print("<TH>Length</TH>\n");
	print("<TH>Flags</TH>\n");
	print("</TR>\n");

	//loop over each field
	for($i = 0; $i < mysql_num_fields($dbResult); $i++)
	{
		print("<TR>\n");
	
		print("<TD>" . mysql_field_name($dbResult, $i) . "</TD>\n");
		print("<TD>" . mysql_field_type($dbResult, $i) . "</TD>\n");
		print("<TD>" . mysql_field_len($dbResult, $i) . "</TD>\n");
		print("<TD>" . mysql_field_flags($dbResult, $i) . "</TD>\n");

		print("</TR>\n");
	}

	//close HTML table
	print("</TABLE>\n");
?>
</BODY>
</HTML>