<HTML>
<HEAD>
<TITLE>dbase_delete_record</TITLE>
</HEAD>
<BODY>
<?
	//open connection to database
	$db = dbase_open("customer.dbf", 2);

	//mark record for deletion
	dbase_delete_record($db, 2);

	//close connection
	dbase_close($db);
?>
</BODY>
</HTML>