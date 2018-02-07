<HTML>
<HEAD>
<TITLE>dba_sync</TITLE>
</HEAD>
<BODY>
<?
	// open database in write mode
	$db = dba_popen('inventory', 'w', 'gdbm');
	
	if($db)
	{
		for($n=1; $n<=10; $n++)
		{
			//insert row
			dba_insert($n, '', $db);
			
			//synchronize
			dba_sync($db);
		}
		
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
