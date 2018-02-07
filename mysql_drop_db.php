<HTML>
<HEAD>
<TITLE>mysql_drop_db</TITLE>
</HEAD>
<BODY>
<?
	//open connection 
	$dbLink = mysql_connect("localhost", "admin", "secret");

	//drop garbage database
	if(mysql_drop_db("garbage", $dbLink))
	{
		print("Database dropped.<BR>");
	}
	else
	{
		print("Database drop failed!<BR>");
	}
?>
</BODY>
</HTML>