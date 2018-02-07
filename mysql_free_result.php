<HTML>
<HEAD>
<TITLE>mysql_free_result</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//get everything from user table 
	$Query = "SELECT * " .
		"FROM user ";
	$dbResult = mysql_query($Query, $dbLink);

	//free result set 
	mysql_free_result($dbResult);
?>
</BODY>
</HTML>