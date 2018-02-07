<HTML>
<HEAD>
<TITLE>ibase_query</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	if(!($dbLink = ibase_connect("mydatabase.gdb", "leon", "secret"))
	{
		print("Unable to connect!<BR>\n");
		exit();
	}
	
	//begin transaction
	$dbTran = ibase_trans(IBASE_DEFAULT, $dbLink);
	
	//insert a message using bind parameters
	$Query = "INSERT INTO message " .
		"VALUES (?, ?, ?) ";

	if(!($result = ibase_query($dbLink, $Query, $inputID, $inputTitle, $inputBody))
	{
		print("Unable to insert row!<BR>\n");
		exit();
	}

	//release memory
	ibase_free_result($result);

	
	//dump table
	print("<TABLE BORDER=\"1\">\n");
	$Query = "SELECT * FROM message ";

	if(!($result = ibase_query($dbLink, $Query))
	{
		print("Unable to query table!<BR>\n");
		exit();
	}

	//print headers
	print("<TR>\n");
	for($i=0; $i<ibase_num_fields($result); $i++)
	{
		$info = ibase_field_info($result, $i);
		print("<TH>{$info["name"]}</TH>\n");
	}
	print("</TR>\n");

	//get all rows
	while($row = ibase_fetch_row($result))
	{
		print("<TR>\n");
		for($i=0; $i<ibase_num_fields($result); $i++)
		{
			print("<TD>$row[$i]</TD>\n");
		}
		print("</TR>\n");
	}
	
	print("</TABLE>\n");

	//release memory
	ibase_free_result($result);

	//commit transaction
	ibase_commit($dbTran);
	
	//close connection
	ibase_close($dbLink);
?>
</BODY>
</HTML>