<HTML>
<HEAD>
<TITLE>ftp_put</TITLE>
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

	//copy local file to remote server
	ftp_put($ftp, "/uploads/data.txt", "/tmp/data.txt", FTP_ASCII);

	//remove remote file
	ftp_delete($ftp, "/uploads/data.txt");
	
	//close connection
	ftp_quit($ftp);
?>
</BODY>
</HTML>