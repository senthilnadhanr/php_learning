<HTML>
<HEAD>
<TITLE>ora_do</TITLE>
</HEAD>
<BODY>
<?
	//in case these aren't set for httpd
	putenv("ORACLE_HOME=/usr/local/oracle7");
	putenv("ORACLE_SID=ORCL");
	
	// connect to server 
	if($Connection = ora_logon("scott", "tiger"))
	{
		$Query = "SELECT ENAME ";
		$Query .= "FROM emp ";
		$Query .= "WHERE ENAME LIKE 'SMI%' ";
		
		if($Cursor = ora_do($Connection, $Query))
		{
			ora_fetch($Cursor);

			print(ora_columnname($Cursor, 0) . "<BR>\n");
			
			// Close the Oracle cursor 
			ora_close($Cursor);
		}

		// disconnect. 
		ora_logoff($Connection);
	}
?>
</BODY>
</HTML>