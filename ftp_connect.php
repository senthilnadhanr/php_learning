<HTML>
<HEAD>
<TITLE>ftp_connect</TITLE>
</HEAD>
<BODY>
<?
	//connect to server
	if(!($ftp = ftp_connect("localhost")))
	{
		print("Unable to connect!<BR>\n");
		exit();
	}

	print("Connected.<BR>\n");

	//log in
	if(!ftp_login($ftp, "anonymous", "corephp@localhost"))
	{
		print("Unable to login!<BR>\n");
		exit();
	}

	print("Logged In.<BR>\n");

	//print system type
	print("System Type: " . ftp_systype($ftp) . "<BR>\n");

	//make sure passive mode is off
	ftp_pasv($ftp, FALSE);
	
	//get working directory
	print("Working Directory: " . ftp_pwd($ftp) . "<BR>\n");
	
	//get files in raw format
	print("Raw List:<BR>\n");
	foreach(ftp_rawlist($ftp, ".") as $line)
	{
		print("$line<BR>\n");
	}
	print("<BR>\n");
	
	//move to pub directory
	if(!ftp_chdir($ftp, "pub"))
	{
		print("Unable to go to the pub directory!<BR>\n");
	}
	
	print("Moved to pub directory.<BR>\n");
	
	//get a list of files
	print("Files:<BR>\n");
	foreach(ftp_nlist($ftp, ".") as $filename)
	{
		print("$filename<BR>\n");
	}
	print("<BR>\n");
	
	//return to root directory
	if(!ftp_cdup($ftp))
	{
		print("Failed to move up a directory!<BR>\n");
	}
	
	//close connection
	ftp_quit($ftp);
?>
</BODY>
</HTML>