<HTML>
<HEAD>
<TITLE>odbc_field_len</TITLE>
</HEAD>
<BODY>
<?
	// connect to database 
	$Connection = odbc_connect("store", "guest", "guest");

	// execute query 
	$Query = "SELECT name, price ";
	$Query .= "FROM catalog ";
	$Result = odbc_do($Connection, $Query);

	print(odbc_field_len($Result, 1));

	odbc_close($Connection);	
?>
</BODY>
</HTML>