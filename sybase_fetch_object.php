<HTML>
<HEAD>
<TITLE>sybase_fetch_object</TITLE>
</HEAD>
<BODY>
<?
	//connect to local database
	$Link = sybase_pconnect("localhost", "sa", "");
	
	//use the pubs database 
	sybase_select_db("pubs", $Link);

	//get all items 
	$Result = sybase_query("SELECT * FROM authors ");
	
	print("<TABLE BORDER=\"1\">\n");

	//get rows 
	while($Row = sybase_fetch_object($Result))
	{
		print("<TR>\n");
	
		print("<TD>$Row->au_fname</TD>\n");

		print("<TD>$Row->au_lname</TD>\n");
		
		print("</TR>\n");
	}

	print("</TABLE>\n");
	
?>
</BODY>
</HTML>