<HTML>
<HEAD>
<TITLE>dbmreplace</TITLE>
</HEAD>
<BODY>
<?
	// open database 
	$db = dbmopen("inventory", "w");

	// add an item key:3 value:Screwdriver
	dbmreplace($db, "3", "Screwdriver");

	// close database 
	dbmclose($db);
?>
</BODY>
</HTML>