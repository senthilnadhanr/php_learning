<HTML>
<HEAD>
<TITLE>mysql_fetch_array</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//get rates from tax table 
	$Query = "SELECT State, Rate " .
		"FROM tax ";
	$dbResult = mysql_query($Query, $dbLink);

	// get each row 
	while($row = mysql_fetch_array($dbResult, MYSQL_ASSOC))
	{
		// print state and rate
		print("{$row["State"]} = {$row["Rate"]}<BR>\n");
	}
?>
</BODY>
</HTML>