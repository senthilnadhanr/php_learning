<HTML>
<HEAD>
<TITLE>msql_result</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Query = "SELECT * FROM item i, SKU s ";
	$Query .= "WHERE i.SKU = s.ID ";
	$Result = msql_query($Query, $Link);

	$numRows = msql_num_rows($Result);

	for($index = 0; $index < $numRows; $index++)
	{
		$item_ID = msql_result($Result, $index, "item.ID");
		$item_Name = msql_result($Result, $index, "item.Name");

		print("$item_ID: $item_Name<BR>\n");
	}

	msql_close($Link);
?>
</BODY>
</HTML>