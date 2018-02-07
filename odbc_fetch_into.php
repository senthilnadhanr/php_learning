<HTML>
<HEAD>
<TITLE>odbc_fetch_into</TITLE>
</HEAD>
<BODY>
<?
	// connect to database 
	$Connection = odbc_connect("store", "guest", "guest");

	// execute query 
	$Query = "SELECT name, price ";
	$Query .= "FROM catalog ";
	$Result = odbc_do($Connection, $Query);

	while(odbc_fetch_into($Result, &$fields))
	{
		$name = $fields[0];
		$price = $fields[1];
		print("$name: $price<BR>\n");
	}

	odbc_close($Connection);	
?>
</BODY>
</HTML>