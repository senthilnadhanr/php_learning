<HTML>
<HEAD>
<TITLE>msql_fieldlen</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Query = "SELECT * FROM item";
	$Result = msql_query($Query, $Link);

	print("Field 0 length is " . msql_fieldlen($Result, 0));

	msql_close($Link);
?>
</BODY>
</HTML>