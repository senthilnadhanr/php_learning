<HTML>
<HEAD>
<TITLE>ftp_fput</TITLE>
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

	//open local file
	if(!($fp = fopen("/tmp/data.txt", "r")))
	{
		print("Unable to open local file!<BR>\n");
		exit();
	}
	
	//write file to remote server
	ftp_fput($ftp, "data.txt", $fp, FTP_ASCII);
	
	//close local file
	fclose($fp);
	
	//close connection
	ftp_quit($ftp);
?>
</BODY>
</HTML>