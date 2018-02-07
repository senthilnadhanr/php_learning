<HTML>
<HEAD>
<TITLE>msql_db_query</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");
	$Query = "DELETE FROM customer";
	$Result = msql_db_query("store", $Query, $Link);
	
	$RowsAffected = msql_affected_rows($Link);
	print($RowsAffected . " rows deleted.");

	msql_close($Link);
?>
</BODY>
</HTML>