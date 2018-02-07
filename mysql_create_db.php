<HTML>
<HEAD>
<TITLE>mysql_create_db</TITLE>
</HEAD>
<BODY>
<?
	// open connection 
	$dbLink = mysql_connect("localhost", "admin", "secret");

	//create database
	mysql_create_db("garbage", $dbLink);
?>
</BODY>
</HTML>