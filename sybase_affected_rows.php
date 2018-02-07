<HTML>
<HEAD>
<TITLE>sybase_affected_rows</TITLE>
</HEAD>
<BODY>
<?
	//open connection as admin
	$Link = sybase_pconnect("localhost", "sa", "");
	
	//use the pubs database 
	sybase_select_db("pubs", $Link);
	
	//buy one copy of all the computer books
	$Query = "UPDATE titles ";
	$Query .= "SET ytd_sales = ytd_sales + 1 ";
	$Query .= "WHERE type = 'popular_comp' "; 
	$Result = sybase_query($Query, $Link);

	//get number of rows changed
	$RowsChanged = sybase_affected_rows($Link);
	
	print("$RowsChanged prices updated.<BR>\n");
	
	//close connection
	sybase_close($Link);
?>
</BODY>
</HTML>