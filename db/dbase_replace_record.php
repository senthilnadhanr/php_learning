<HTML>
<HEAD>
<TITLE>dbase_replace_record</TITLE>
</HEAD>
<BODY>
<?
	$db = dbase_open("customer.dbf", 2);

	$Record = array("John Smith", 200.00, "19990901", "Y");

	dbase_replace_record($db,  $Record, 1);

	dbase_close($db);
?>
</BODY>
</HTML>