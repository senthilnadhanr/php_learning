<HTML>
<HEAD>
<TITLE>sybase_get_last_message</TITLE>
</HEAD>
<BODY>
<?
	//try connect to local database with bad login info,
	//also suppress error messages
	$Link = @sybase_pconnect("localhost", "sa", "bad");

	//print the last message from the interface
	print(sybase_get_last_message());
?>
</BODY>
</HTML>