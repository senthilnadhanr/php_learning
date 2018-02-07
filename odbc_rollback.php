<HTML>
<HEAD>
<TITLE>odbc_rollback</TITLE>
</HEAD>
<BODY>
<?
	// connect to database 
	$Connection = odbc_connect("store", "guest", "guest");

	// turn off autocommit 
	odbc_autocommit($Connection, FALSE);

	// put everything on sale 
	$Query = "UPDATE catalog ";
	$Query .= "SET price = price * 0.9 ";
	$Result = odbc_do($Connection, $Query);

	// rollback 
	odbc_rollback($Connection);

	odbc_close($Connection);	
?>
</BODY>
</HTML>