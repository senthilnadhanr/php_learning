<HTML>
<HEAD>
<TITLE>ocibindbyname</TITLE>
</HEAD>
<BODY>
<?
	//set-up data to insert
	$NewEmployee = array(
		array(8001, 'Smith', 'Clerk'),
		array(8002, 'Jones', 'Analyst'),
		array(8003, 'Atkinson', 'President')
		);

	//connect to database
	$Connection = ocilogon("scott", "tiger");
	
	//assemble query
	$Query = "INSERT INTO emp (EMPNO, ENAME, JOB, HIREDATE) ";
	$Query .= "VALUES (:empno, :ename, :job, SYSDATE ) ";
	$Query .= "RETURNING ROWID INTO :rowid ";
	
	//parse query
	$Statement = ociparse($Connection, $Query);

	//create descriptor the abstract data type
	$RowID = ocinewdescriptor($Connection, OCI_D_ROWID);

	//bind input and output variables
	ocibindbyname($Statement, ":empno", &$EmployeeNumber, 32);
	ocibindbyname($Statement, ":ename", &$EmployeeName, 32);
	ocibindbyname($Statement, ":job", &$Job, 32);
	ocibindbyname($Statement, ":rowid", &$RowID, -1, OCI_B_ROWID);

	
	//loop over each new employee
	while(list($key, $EmployeeInfo) = each($NewEmployee))
	{
		list($EmployeeNumber, $EmployeeName, $Job) = $EmployeeInfo;
		
		//execute query, do not automatically commit
		ociexecute($Statement, OCI_DEFAULT);

		print("$EmployeeNumber has ROWID $RowID<BR>\n");		
	}
	
	//free descriptor
	$RowID->free();
	
	//free the statement
	ocifreestatement($Statement);

	//undo the inserts
	//Normally, you won't do this, if we undo the inserts
	//each time, we can run the example over and over
	ocirollback($Connection);
	
	//close connection
	ocilogoff($Connection);
?>
</BODY>
</HTML>
