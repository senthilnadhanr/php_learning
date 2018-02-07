<HTML>
<HEAD>
<TITLE>odbc_binmode</TITLE>
</HEAD>
<BODY>
<?
	// get a GIF from a database and send it to browser 

	// connect to database 
	$Connection = odbc_connect("store", "admin", "secret");

	// execute query 
	$Query = "SELECT picture ";
	$Query .= "FROM employee ";
	$Query .= "WHERE id=17 ";
	$Result = odbc_do($Connection, $Query);

	// make sure binmode is set for binary pass through 
	odbc_binmode($Result, ODBC_BINMODE_PASSTHRU);

	// make sure longreadlen mode 
	// is set for echo to browser 
	odbc_longreadlen($Result, 0);

	// get the first row, ignore the rest 
	odbc_fetch_row($Result);

	// send header so browser knows it's a gif  
	header("Content-type: image/gif");

	// get the picture 
	odbc_result($Result, 1);
?>
</BODY>
</HTML>