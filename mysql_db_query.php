<HTML>
<HEAD>
<TITLE>mysql_db_query</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//truncate session table 
	$Query = "DELETE FROM session  ";
	$dbResult = mysql_db_query("freetrade", $Query, $dbLink);
?>
</BODY>
</HTML>