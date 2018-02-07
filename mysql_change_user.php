<HTML>
<HEAD>
<TITLE>mysql_change_user</TITLE>
</HEAD>
<BODY>
<?
	//connect to server as freetrade user, no password 
	$dbLink = mysql_pconnect("localhost", "freetrade", "");

	//select the 'freetrade' database 
	mysql_select_db("freetrade", $dbLink);

	//switch to admin user
	mysql_change_user("admin", "secret", "freetrade", $dbLink);
?>
</BODY>
</HTML>