<HTML>
<HEAD>
<TITLE>msql_fetch_array</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Query = "SELECT * FROM customer";
	$Result = msql_query($Query, $Link);

	//fetch each row
	while($Row = msql_fetch_array($Result, MSQL_ASSOC))
	{
		print($Row["FirstName"] . "<BR>\n");
	}

	msql_close($Link);
?>
</BODY>
</HTML>