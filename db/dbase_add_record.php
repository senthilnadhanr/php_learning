<HTML>
<HEAD>
<TITLE>dbase_add_record</TITLE>
</HEAD>
<BODY>
<?
	//open connection to database
	$db = dbase_open("customer.dbf", 2);

	//create record to be added
	$newRecord = array("John Smith", 100.00, "19980901", "Y");

	//add record
	dbase_add_record($db,  $newRecord);

	//close connection
	dbase_close($db);
?>
</BODY>
</HTML>