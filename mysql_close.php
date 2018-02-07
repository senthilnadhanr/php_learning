<HTML>
<HEAD>
<TITLE>mysql_close</TITLE>
</HEAD>
<BODY>
<?
	//open connection 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//close connection 
	mysql_close($dbLink);
?>
</BODY>
</HTML>