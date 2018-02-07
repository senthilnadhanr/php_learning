<HTML>
<HEAD>
<TITLE>odbc_result_all</TITLE>
</HEAD>
<BODY>
<?
	// connect to database 
	$Connection = odbc_connect("store", "guest", "guest");

	// execute query 
	$Query = "SELECT name, price ";
	$Query .= "FROM catalog ";
	$Result = odbc_do($Connection, $Query);

	// dump all results 
	odbc_result_all($Result, "BORDER=1");

	odbc_close($Connection);	
?>
</BODY>
</HTML>