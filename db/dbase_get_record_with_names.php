<HTML>
<HEAD>
<TITLE>dbase_get_record_with_names</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	$db = dbase_open("customer.dbf", 2);

	// get every record 
	for($index = 1; $index <= dbase_numrecords($db); $index++)
	{
		$record = dbase_get_record_with_names($db, $index);
		print("<H3>Record $index</H3>\n");

		//loop over fields
		while(list($key, $value) = each($record))
		{
			print("<B>Field $key: $value</B><BR>\n");
		}
	}

	//close connection
	dbase_close($db);
?>
</BODY>
</HTML>