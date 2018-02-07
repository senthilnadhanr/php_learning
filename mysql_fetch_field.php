<HTML>
<HEAD>
<TITLE>mysql_fetch_field</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//get everything from address table 
	$Query = "SELECT * " .
		"FROM address a, user u " .
		"WHERE u.Address = a.ID ";
	$dbResult = mysql_query($Query, $dbLink);

	// get description of each field 
	while($Field = mysql_fetch_field($dbResult))
	{
		print("$Field->table, $Field->name, $Field->type<BR>\n");
	}
?>
</BODY>
</HTML>