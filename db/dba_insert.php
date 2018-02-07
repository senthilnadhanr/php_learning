<HTML>
<HEAD>
<TITLE>dba_insert</TITLE>
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
			//item 3 exists, set inventory to 150 
			dba_replace('3', '150', $db);
		}
		else
		{
			//item 3 doesn't exists, insert it
			dba_insert('3', '150', $db);
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