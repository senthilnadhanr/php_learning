<HTML>
<HEAD>
<TITLE>msql_free_result</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Query = "INSERT INTO store VALUES (0, 'Martinez')";
	$Result = msql_query($Query, $Link);

	msql_free_result($Result);

	msql_close($Link);
?>
</BODY>
</HTML>