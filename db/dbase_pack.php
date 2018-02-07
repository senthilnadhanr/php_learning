<HTML>
<HEAD>
<TITLE>dbase_pack</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	$db = dbase_open("customer.dbf", 2);

	//removed rows marked for deletion
	dbase_pack($db);

	//close connection
	dbase_close($db);
?>
</BODY>
</HTML>