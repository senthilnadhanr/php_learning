<HTML>
<HEAD>
<TITLE>ftp_mkdir</TITLE>
</HEAD>
<BODY>
<?
	//connect to server
	if(!($ftp = ftp_connect("localhost")))
	{
		print("Unable to connect!<BR>\n");
		exit();
	}

	//log in
	if(!ftp_login($ftp, "anonymous", "corephp@localhost"))
	{
		print("Unable to login!<BR>\n");
		exit();
	}

	//create a new directory
	$result = ftp_mkdir($ftp, "corephp");
	if($result)
	{
		print("Created directory: $result<BR>\n");
	}
	else
	{
		print("Unable to create corephp directory!<BR>\n");
	}

	//remove corephp directory
	if(!ftp_rmdir($ftp, "corephp"))
	{
		print("Unable to remove corephp directory!<BR>\n");
	}	
	
	//close connection
	ftp_quit($ftp);
?>
</BODY>
</HTML>