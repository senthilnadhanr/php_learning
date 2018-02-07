<HTML>
<HEAD>
<TITLE>mysql_errno</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//try to execute a bad query (missing fields)
	$Query = "SELECT FROM tax ";
	if(!($dbResult = mysql_query($Query, $dbLink)))
	{
		// get error and error number 
		$errno = mysql_errno($dbLink);
		$error = mysql_error($dbLink);
	
		print("ERROR $errno: $error<BR>\n");
	}
?>
</BODY>
</HTML>