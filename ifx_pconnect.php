<HTML>
<HEAD>
<TITLE>ifx_pconnect</TITLE>
</HEAD>
<BODY>
<?
	//connect to database
	if(!($dbLink = ifx_pconnect("mydb@ol_srv1", "leon", "secret"))
	{
		print("Unable to connect!<BR>\n");
		exit();	
	}

	//treat blobs as varchars
	ifx_textasvarchar(TRUE);

	//get a record from the message table
	$Query = "SELECT Title, Body FROM message " .
		"WHERE ID = 3 ";
	if(!($result = ifx_query($Query, $dbLink))
	{
		print("Unable to query message table!<BR>\n");
	}

	//print results in HTML table
	ifx_htmltbl_result($result);
	
	//free result identifier
	ifx_free_result($dbLink);

	//close connection
	ifx_close($dbLink);
?>
</BODY>
</HTML>


