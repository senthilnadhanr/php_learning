<HTML>
<HEAD>
<TITLE>mysql_fetch_lengths</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//get everything from address table 
	$Query = "SELECT * " .
		"FROM address ";
	$dbResult = mysql_query($Query, $dbLink);

	//get field lengths 
	$lengths = mysql_fetch_lengths($dbResult);

	//print length of the third column 
	print($lengths[2]);
?>
</BODY>
</HTML>