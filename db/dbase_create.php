<HTML>
<HEAD>
<TITLE>dbase_create</TITLE>
</HEAD>
<BODY>
<?
	// create field definition
	$fields = array(
		array("Name", "C", 32),
		array("Balance", "N", 8, 2),
		array("Birthday", "D"),
		array("Commercial", L));

	$db = dbase_create("customer.dbf", $fields);

	dbase_close($db);
?>
</BODY>
</HTML>