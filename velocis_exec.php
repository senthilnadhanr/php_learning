<HTML>
<HEAD>
<TITLE>velocis_exec</TITLE>
</HEAD>
<BODY>
<?
	// connect to database 
	$connection = velocis_connect("localhost",
		"leon", "secret");

	// execute query 
	$query = "SELECT * FROM item ";
	$result = velocis_exec($connection, $query);

	// get number of fields 
	$fields = velocis_fieldnum($result);

	print("<TABLE BORDER=\"1\">\n");

	// make header row 
	print("<TR>\n");
	for($index = 0; $index < $fields; $index++)
	{
		print("<TH>");
		print(velocis_fieldname($result, $index));
		print("</TH>\n");
	}
	print("</TR>\n");

	while(velocis_fetch($result))
	{
		print("<TR>\n");
		for($index = 0; $index < $fields; $index++)
		{
			print("<TD>");
			print(velocis_result($result, $index));
			print("</TD>\n");
		}
		print("</TR>\n");
	}

	print("</TABLE>\n");

	// free result 
	velocis_freeresult($result);

	// close connection 
	velocis_close($connection);
?>
</BODY>
</HTML>