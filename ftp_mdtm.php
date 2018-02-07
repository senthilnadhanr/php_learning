<HTML>
<HEAD>
<TITLE>ftp_mdtm</TITLE>
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

	//get the size of the README file
	print("Size: " . ftp_size($ftp, "README") . "<BR>\n");

	//get the last modification date
	print("Modified: " . 
		date("Y-m-d", ftp_mdtm($ftp, "README")) . 
		"<BR>\n");
	
	//close connection
	ftp_quit($ftp);
?>
</BODY>
</HTML>