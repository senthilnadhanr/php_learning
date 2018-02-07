<HTML>
<HEAD>
<TITLE>odbc_cursor</TITLE>
</HEAD>
<BODY>
<?
	// connect to database 
	$Connection = odbc_connect("store", "guest", "guest");

	// execute query 
	$Query = "SELECT name, price ";
	$Query .= "FROM catalog ";
	$Result = odbc_do($Connection, $Query);

	print("Cursor: " . odbc_cursor($Result) . "<BR>\n");

	while(odbc_fetch_row($Result))
	{
		$name = odbc_result($Result, 1);
		$price = odbc_result($Result, 2);

		print("$name: $price<BR>\n");
	}

	odbc_close($Connection);	
?>
</BODY>
</HTML>