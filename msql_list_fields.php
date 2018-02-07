<HTML>
<HEAD>
<TITLE>msql_list_fields</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Result = msql_list_fields("store", "item", $Link);
	while($row_array = msql_fetch_row($Result))
	{
		print($row_array[0] . "<BR>\n");
	}
	
	msql_close($Link);
?>
</BODY>
</HTML>