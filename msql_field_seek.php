<HTML>
<HEAD>
<TITLE>msql_field_seek</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Query = "SELECT * FROM item i, SKU s ";
	$Query .= "WHERE i.SKU = s.ID ";
	$Result = msql_query($Query, $Link);

	// get description of each field 
	// starting with the third       
	msql_field_seek($Result, 2);

	while($Field = msql_fetch_field($Result))
	{
		print("Name: " . $Field->name . "<BR>\n");
		print("Table: " . $Field->table . "<BR>\n");
		print("Not Null: " . $Field->not_null ."<BR>\n");
		print("Primary Key: " . $Field->primary_key "<BR>\n");
		print("Unique: " . $Field->unique . "<BR>\n");
		print("Type: " . $Field->type . "<BR>\n<BR>\n");
	}

	msql_close($Link);
?>
</BODY>
</HTML>