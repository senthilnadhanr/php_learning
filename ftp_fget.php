<HTML>
<HEAD>
<TITLE>ftp_fget</TITLE>
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

	//open local file for writing
	$fp = fopen("/tmp/ftp_fget.test", "w");

	//save remote file in open file stream
	if(!ftp_fget($ftp, $fp, "data.txt", FTP_ASCII))
	{
		print("Unable to get remote file!<BR>\n");
	}

	//close local file
	fclose($fp);
	
	//close connection
	ftp_quit($ftp);
?>
</BODY>
</HTML>