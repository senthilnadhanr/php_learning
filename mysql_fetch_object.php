<HTML>
<HEAD>
<TITLE>mysql_fetch_object</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//get unique cities from address table 
	$Query = "SELECT City, StateProv " .
		"FROM address ";
	$dbResult = mysql_query($Query, $dbLink);

	// get each row 
	while($row = mysql_fetch_object($dbResult))
	{
		// print name 
		print("$row->City, $row->StateProv<BR>\n");
	}
?>
</BODY>
</HTML>