<HTML>
<HEAD>
<TITLE>dbase_get_record</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	$db = dbase_open("customer.dbf", 2);

	//get some information about database
	$numRecords = dbase_numrecords($db);
	$numFields = dbase_numfields($db);

	// get every record 
	for($index = 1; $index <= $numRecords; $index++)
	{
		//get a record
		$record = dbase_get_record($db, $index);

		print("<H3>Record $index</H3>\n");

		//loop over fields
		for($index2 = 0; $index2 < $numFields; $index2++)
		{
			print("<B>Field $index2:</B>");
			print($record[$index2]);
			print("<BR>\n");
		}

		//print deletion status
		print("<B>Deleted:</B> ");
		print($record["deleted"]);
		print("<BR>\n");
	}

	//close connection
	dbase_close($db);
?>
</BODY>
</HTML>