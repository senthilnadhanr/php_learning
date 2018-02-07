<HTML>
<HEAD>
<TITLE>pg_getlastoid</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	$Connection = pg_connect("", "", "", "", "leon");

	$Query = "INSERT INTO item (name, price) ";
	$Query .= "VALUES ('hammer', 15.00)";

	$Result = pg_exec($Connection, $Query);

	print("ID of inserted item: " . pg_getlastoid() . "<BR>\n");

	pg_close($Connection);
?>
</BODY>
</HTML>