<HTML>
<HEAD>
<TITLE>mysql_list_tables</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//get list of tables 
	$dbResult = mysql_list_tables("freetrade", $dbLink);

	//get each row 
	while($row = mysql_fetch_row($dbResult))
	{
		//print name 
		print($row[0] . "<BR>\n");
	}
?>
</BODY>
</HTML>