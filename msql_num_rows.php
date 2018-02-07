<HTML>
<HEAD>
<TITLE>msql_num_rows</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Query = "SELECT * FROM item i, SKU s ";
	$Query .= "WHERE i.SKU = s.ID ";
	$Result = msql_query($Query, $Link);

	print(msql_num_rows($Result));

	msql_close($Link);
?>
</BODY>
</HTML>