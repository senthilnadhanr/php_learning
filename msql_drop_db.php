<HTML>
<HEAD>
<TITLE>msql_drop_db</TITLE>
</HEAD>
<BODY>
<?
	$Link = msql_connect("msql.clearink.com");

	if(msql_drop_db("store", $Link))
	{
		print("Database deleted!");
	}
	else
	{
		print("Database not deleted: ");
		print(mysql_error());
	}

	msql_close($Link);
?>
</BODY>
</HTML>