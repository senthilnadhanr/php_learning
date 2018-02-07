<HTML>
<HEAD>
<TITLE>msql_fetch_object</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Query = "SELECT * FROM item";
	$Result = msql_query($Query, $Link);

	while($Row = msql_fetch_object($Result))
	{
		print("$Row->ID: $Row->Name<BR>\n");
	}

	msql_close($Link);
?>
</BODY>
</HTML>