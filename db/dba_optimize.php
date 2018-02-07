<HTML>
<HEAD>
<TITLE>dba_optimize</TITLE>
</HEAD>
<BODY>
<?
	// open database in write mode
	$db = dba_popen('inventory', 'w', 'gdbm');
	
	if($db)
	{
		//optimize database
		dba_optimize($db);
		
		// close database 
		dba_close($db);
	}
	else
	{
		print('Database does not exist');
	}
?>
</BODY>
</HTML>