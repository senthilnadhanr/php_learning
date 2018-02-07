<HTML>
<HEAD>
<TITLE>mysql_insert_id</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//insert a row 
	$Query = "INSERT INTO user (Login, Password) " .
		"VALUES('leon', 'secret') ";
	$dbResult = mysql_query($Query, $dbLink);

	//get id 
	print("ID is " . mysql_insert_id($dbLink));
?>
</BODY>
</HTML>