<HTML>
<HEAD>
<TITLE>odbc_prepare</TITLE>
</HEAD>
<BODY>
<?
	// connect to database 
	$Connection = odbc_connect("store", "guest", "guest");

	// prepare query 
	$Query = "INSERT INTO catalog (ID, Name, Price) ";
	$Query .= "VALUES(?, ?, ?) ";
	$Result = odbc_prepare($Connection, $Query);

	// insert                  
	// 0, 2000 Calendar, 20.00                  
	// 1, 2001 Calendar, 20.50 
	// 2, 2002 Calendar, 21.00 
	for($index = 2000; $index <= 2002; $index++)
	{
		$values[0] = $index-2000;
		$values[1] = "$index Calendar";
		$values[2] = 20.00 + (0.50 * ($index-2000));

		odbc_execute($Result, $values);
	}

	odbc_close($Connection);	
?>
</BODY>
</HTML>