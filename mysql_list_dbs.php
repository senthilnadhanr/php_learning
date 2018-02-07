<HTML>
<HEAD>
<TITLE>mysql_list_dbs</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//get list of databases 
	$dbResult = mysql_list_dbs($dbLink);

	//get each row 
	while($row = mysql_fetch_row($dbResult))
	{
		// print name 
		print($row[0] . "<BR>\n");
	}
?>
</BODY>
</HTML>