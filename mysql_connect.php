<HTML>
<HEAD>
<TITLE>mysql_create_db</TITLE>
</HEAD>
<BODY>
<?
	//establish connection
	if(!($dbLink = mysql_connect("localhost:3606", "freetrade", "")))
	{
		print("mysql_connect failed!<BR>\n");
	}

	//select database
	if(!(mysql_select_db("freetrade", $dbLink)))
	{
		print("mysql_select_db failed!<BR>\n");
		print(mysql_errno() . ": "); 
		print(mysql_error() . "<BR>\n");
	}
?>
</BODY>
</HTML>