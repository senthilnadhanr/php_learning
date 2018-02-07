<HTML>
<HEAD>
<TITLE>ora_bind</TITLE>
</HEAD>
<BODY>
<?
	//in case these aren't set for httpd
	putenv("ORACLE_HOME=/usr/local/oracle7");
	putenv("ORACLE_SID=ORCL");
	
	//connect to server
	$Connection = ora_logon("scott", "tiger");
	
	//open cursor
	$Cursor = ora_open($Connection);
	
	$Query = "DECLARE php_in INTEGER; ";
	$Query .= "BEGIN ";
	$Query .= ":php_out := :php_in + 3; ";
	$Query .= "END;";
	
	//parse query
	ora_parse($Cursor, $Query);
	
	ora_bind($Cursor, "input", ":php_in", 11, ORA_BIND_IN);
	ora_bind($Cursor, "output", ":php_out", 11, ORA_BIND_OUT);
	
	$input = 10;
	
	//execute query
	ora_exec($Cursor);

	print("$output<BR>\n");
	   
	//close the oracle cursor 
	ora_close($Cursor);
	
	//disconnect.
	ora_logoff($Connection);
?> 
</BODY>
</HTML>