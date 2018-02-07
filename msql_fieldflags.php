<HTML>
<HEAD>
<TITLE>msql_fieldflags</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	msql_select_db("store", $Link);

	$Query = "SELECT * FROM item";
	$Result = msql_query($Query, $Link);

	print("Field 0 flags are " . msql_fieldflags($Result, 0));

	msql_close($Link);
?>
</BODY>
</HTML>