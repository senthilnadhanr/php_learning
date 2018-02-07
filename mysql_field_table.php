<HTML>
<HEAD>
<TITLE>mysql_field_table</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//get everything from user table 
	//get everything from address table 
	$Query = "SELECT * " .
		"FROM address a, user u " .
		"WHERE u.Address = a.ID ";
	$dbResult = mysql_query($Query, $dbLink);

	$Fields = mysql_num_fields($dbResult);
	for($i = 0; $i < $Fields; $i++)
	{
		print(mysql_field_table($dbResult, $i) . "<BR>\n");
	}
?>
</BODY>
</HTML>