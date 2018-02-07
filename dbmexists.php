<HTML>
<HEAD>
<TITLE>dbmexists</TITLE>
</HEAD>
<BODY>
<?
	// create a new database 
	$db = dbmopen("inventory", "r");

	if(dbmexists($db, "1"))
	{
		print("1 is a valid key");
	}
	else
	{
		print("Invalid key");
	}

	// close database 
	dbmclose($db);
?>
</BODY>
</HTML>