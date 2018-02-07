<HTML>
<HEAD>
<TITLE>mysql_data_seek</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//get states from tax table 
	$Query = "SELECT State " .
		"FROM tax ";
	$dbResult = mysql_query($Query, $dbLink);

	//jump to fifth row 
	mysql_data_seek($dbResult, 4);

	//get row 
	$row = mysql_fetch_row($dbResult);

	//print state name 
	print($row[0]);
?>
</BODY>
</HTML>