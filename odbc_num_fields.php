<HTML>
<HEAD>
<TITLE>odbc_num_fields</TITLE>
</HEAD>
<BODY>
<?
	// connect to database 
	$Connection = odbc_connect("store", "guest", "guest");

	// execute query 
	$Query = "SELECT name, price ";
	$Query .= "FROM catalog ";
	$Result = odbc_do($Connection, $Query);

	print(odbc_num_fields($Result));

	odbc_close($Connection);	
?>
</BODY>
</HTML>