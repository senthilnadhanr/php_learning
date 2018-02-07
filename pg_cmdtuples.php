<HTML>
<HEAD>
<TITLE>pg_cmdtuples</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	$Connection = pg_connect("", "", "", "", "leon");
	
	$Query = "INSERT INTO item ";
	$Query .= "VALUES ('hammer', 15.00) ";

	//execute query	
	$Result = pg_exec($Connection, $Query);

	//tell user how many rows were inserted
	print(pg_cmdtuples($Result) . " rows inserted.<BR>\n");
	
	//close connection
	pg_close($Connection);
?>
</BODY>
</HTML>