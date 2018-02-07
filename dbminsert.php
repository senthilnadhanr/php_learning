<HTML>
<HEAD>
<TITLE>dbminsert</TITLE>
</HEAD>
<BODY>
<?
	// open database 
	$db = dbmopen("inventory", "w");

	// add an item key:2 value:Drill
	dbminsert($db, "2", "Drill");

	// close database 
	dbmclose($db);
?>
</BODY>
</HTML>