<HTML>
<HEAD>
<TITLE>dbmdelete</TITLE>
</HEAD>
<BODY>
<?
	// open database 
	$db = dbmopen("inventory", "w");

	// remove item 3 
	dbmdelete($db, "3");

	// close database 
	dbmclose($db);
?>
</BODY>
</HTML>