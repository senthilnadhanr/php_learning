<HTML>
<HEAD>
<TITLE>mysql_field_seek</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	// get everything from address table 
	$Query = "SELECT * " .
		"FROM address ";
	$dbResult = mysql_query($Query, $dbLink);

	//skip to second field 
	mysql_field_seek($dbResult, 1);

	//get description of each field 
	while($Field = mysql_fetch_field($dbResult))
	{
		print("$Field->table, $Field->name, $Field->type<BR>\n");
	}
?>
</BODY>
</HTML>