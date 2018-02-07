<HTML>
<HEAD>
<TITLE>mysql_result</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_connect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	// get everything from customer table 
	$Query = "SELECT * FROM " .
		"user u " .
		"WHERE u.Login like 'A%' ";
	$dbResult = mysql_query($Query, $dbLink);

	// get number of rows 
	$rows = mysql_num_rows($dbResult);

	for($i = 0; $i < $rows; $i++)
	{
		$name = mysql_result($dbResult, $i, "u.Login");
		print("$name<BR>\n");
	}
?>
</BODY>
</HTML>