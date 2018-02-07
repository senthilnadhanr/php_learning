<HTML>
<HEAD>
<TITLE>ftp_get</TITLE>
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

	//save file to tmp directory
	ftp_get($ftp, "/tmp/data.bin", "/pub/data.bin", FTP_IMAGE);
	
	//close connection
	ftp_quit($ftp);
?>
</BODY>
</HTML>