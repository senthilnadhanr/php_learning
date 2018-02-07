<HTML>
<HEAD>
<TITLE>odbc_free_result</TITLE>
</HEAD>
<BODY>
<?
	// connect to database 
	$Connection = odbc_connect("store", "guest", "guest");

	// execute query 
	$Query = "SELECT name, price ";
	$Query .= "FROM catalog ";
	$Result = odbc_do($Connection, $Query);

	// free the result set 
	odbc_free_result($Result);

	odbc_close($Connection);	
?>
</BODY>
</HTML>