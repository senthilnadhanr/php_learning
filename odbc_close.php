<HTML>
<HEAD>
<TITLE>odbc_close</TITLE>
</HEAD>
<BODY>
<?
	// connect to database 
	$Connection = odbc_connect("store", "guest", "guest");

	// execute query 
	$Query = "SELECT price ";
	$Query .= "FROM catalog ";
	$Query .= "WHERE id=10 ";
	$Result = odbc_do($Connection, $Query);

	odbc_fetch_row($Result)

	$price = odbc_result($Result, 1);

	print("$price<BR>\n");

	odbc_close($Connection);	
?>
</BODY>
</HTML>