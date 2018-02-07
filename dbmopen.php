<HTML>
<HEAD>
<TITLE>dbmopen</TITLE>
</HEAD>
<BODY>
<?
	// create a new database 
	$db = dbmopen("inventory", "n");

	// add an item key:1 value:Hammer
	dbminsert($db, "1", "Hammer");

	// close database 
	dbmclose($db);
?>
</BODY>
</HTML>