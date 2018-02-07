<HTML>
<HEAD>
<TITLE>msql_data_seek</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Result = msql_query("SELECT Name FROM customer", $Link);

	// jump to tenth customer 
	msql_data_seek($Result, 10);

	$Row = msql_fetch_row($Result);
	
	print($Row[0]);

	msql_close($Link);
?>
</BODY>
</HTML>