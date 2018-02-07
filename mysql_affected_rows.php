<HTML>
<HEAD>
<TITLE>mysql_affected_rows</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//update some invoices 
	$Query = "UPDATE invoice " .
		"SET Active = 'Y' " .
		"WHERE ID < 100 ";
	$dbResult = mysql_query($Query, $dbLink);

	//let user know how many rows were updated 
	$AffectedRows = mysql_affected_rows($dbLink);
	print("$AffectedRows rows updated.<BR>\n");
?>
</BODY>
</HTML>