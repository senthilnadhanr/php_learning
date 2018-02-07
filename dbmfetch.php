<HTML>
<HEAD>
<TITLE>dbmfetch</TITLE>
</HEAD>
<BODY>
<?
	// create a new database 
	$db = dbmopen("inventory", "r");

	$value = dbmfetch($db, "1");
	print($value);

	// close database 
	dbmclose($db);
?>
</BODY>
</HTML>