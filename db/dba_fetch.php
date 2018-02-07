<HTML>
<HEAD>
<TITLE>dba_fetch</TITLE>
</HEAD>
<BODY>
<?
	// open database in write mode
	$db = dba_popen('inventory', 'r', 'gdbm');
	
	if($db)
	{
		//loop over each record
		for($key = dba_firstkey($db); $key; $key=dba_nextkey($db))
		{
			print("$key = ");
			
			//fetch this record
			print(dba_fetch($key, $db));

			print("<BR>\n");
		}
	}
	else
	{
		print('Database does not exist');
	}
?>
</BODY>
</HTML>