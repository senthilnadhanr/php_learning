<HTML>
<HEAD>
<TITLE>mysql_fetch_row</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//get unique cities from address table 
	$Query = "SELECT DISTINCT City, StateProv " .
		"FROM address ";
	$dbResult = mysql_query($Query, $dbLink);

	//get each row
	while($row = mysql_fetch_row($dbResult))
	{
		// print city, state 
		print("$row[0], $row[1]<BR>\n");
	}
?>
</BODY>
</HTML>