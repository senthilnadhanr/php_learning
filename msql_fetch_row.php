<HTML>
<HEAD>
<TITLE>msql_fetch_row</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Query = "SELECT * FROM item";
	$Result = msql_query($Query, $Link);

	while($Row = msql_fetch_row($Result))
	{
		print($Row[0] . ": " . $Row[1] . "<BR>\n");
	}

	msql_close($Link);
?>
</BODY>
</HTML>