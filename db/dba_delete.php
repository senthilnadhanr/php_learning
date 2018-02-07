<HTML>
<HEAD>
<TITLE>dba_delete</TITLE>
</HEAD>
<BODY>
<?
	// open database in write mode
	$db = dba_popen('inventory', 'w', 'gdbm');
	
	if($db)
	{
		//check for record
		if(dba_exists('3', $db))
		{
			// remove item 3 
			dba_delete('3', $db);
		}
		else
		{
			print('Record does not exist');
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