<HTML>
<HEAD>
<TITLE>ora_fetch_into</TITLE>
</HEAD>
<BODY>
<?
	//in case these aren't set for httpd
	putenv("ORACLE_HOME=/usr/local/oracle7");
	putenv("ORACLE_SID=ORCL");
	
	
	//connect to server
	if(!($Connection = ora_logon("scott", "tiger")))
	{
		print("Could not connect to database!<BR>\n");
		exit;
	}
	
	$Query = "SELECT EMPNO ";
	$Query .= "FROM emp ";

	if(!($Cursor = ora_do($Connection, $Query)))
	{
		print("Cursor could not be opened!<BR>\n");
		print("Error Code: " . ora_errorcode($Connection) . "<BR>\n");
		print("Error Message: " . ora_error($Connection) . "<BR>\n");
		exit;
	}
	
	while(ora_fetch_into($Cursor, &$Column))
	{
		print("$Column[0]<BR>\n");
	}
	
	// Close the Oracle cursor 
	ora_close($Cursor);

	// disconnect. 
	ora_logoff($Connection);
?>
</BODY>
</HTML>