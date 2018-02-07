<HTML>
<HEAD>
<TITLE>ocidefinebyname</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	$Connection = ocilogon("scott", "tiger");
	
	//assemble query
	$Query = "SELECT ENAME, HIREDATE ";
	$Query .= "FROM emp ";
	$Query .= "WHERE JOB='CLERK' ";
	
	//parse query
	$Statement = ociparse($Connection, $Query);
	
	//associate two columns with variables
	ocidefinebyname($Statement, "ENAME", &$EmployeeName);
	ocidefinebyname($Statement, "HIREDATE", &$HireDate);
	
	//execute query
	ociexecute($Statement);
	
	//fetch each row
	while(ocifetch($Statement)) 
	{
		print("$EmployeeName was hired $HireDate<BR>\n");
	}
	
	//free the statement
	ocifreestatement($Statement);
	
	//close connection
	ocilogoff($Connection);
?>
</BODY>
</HTML>