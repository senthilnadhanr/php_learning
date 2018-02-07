<HTML>
<HEAD>
<TITLE>sybase_result</TITLE>
</HEAD>
<BODY>
<?
	//connect to local database
	$Link = sybase_pconnect("localhost", "sa", "");
	
	//use the pubs database 
	sybase_select_db("pubs", $Link);
	
	//get all items 
	$Result = sybase_query("SELECT * FROM titles ");
	
	print("<TABLE BORDER=\"1\">\n");

	//header row
	print("<TR>\n");
	$Fields = sybase_num_fields($Result);
	for($i = 0; $i < $Fields; $i++)
	{
		$Field = sybase_fetch_field($Result);
	
		print("<TH>");
		print($Field->column_source);
		print(".");
		print($Field->name);
		print("(");
		print($Field->max_length);
		print(")");
		print("</TH>\n");		
	}
	print("</TR>\n");

	// data rows 
	$Rows = sybase_num_rows($Result);
	for($n = 0; $n < $Rows; $n++)
	{
		print("<TR>\n");
	
		for($i = 0; $i < $Fields; $i++)
		{
			print("<TD>");
			print(sybase_result($Result, $n, $i));
			print("</TD>\n");
		}
		
		print("</TR>\n");
	}

	print("</TABLE>\n");
	
	sybase_free_result($Result);
	
	sybase_close($Link);
?>
</BODY>
</HTML>