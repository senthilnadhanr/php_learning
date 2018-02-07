<HTML>
<HEAD>
<TITLE>ifx_prepare</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	if(!($dbLink = ifx_pconnect("mydb@ol_srv1", "leon", "secret"))
	{
		print("Unable to connect!<BR>\n");
		exit();	
	}

	//get message about PHP
	$Query = "SELECT ID, Title FROM message " .
		"WHERE Title like '%PHP%' ";
	if(!($result = ifx_prepare($Query, $dbLink, IFX_SCROLL))
	{
		print("Unable to query message table!<BR>\n");
	}

	if(ifx_affectedrows($result) < 100)
	{
		//execute query
		ifx_do($result);
		
		//fetch each row, print a link
		while($row = ifx_fetch_row($result, "NEXT"))
		{
			print("<A HREF=\"get.php?id={$row["ID"]}\">");
			print("{$row["Title"]}</A><BR>\n");
		}
	}
	else
	{
		print("Too many results to display on one page.<BR>\n");
	}
	
	//free result identifier
	ifx_free_result($dbLink);

	//close connection
	ifx_close($dbLink);
?>
</BODY>
</HTML>