<?
	//tell browser not to render this
	header("Content-type: text/plain");

	//try to connect to Web server, 
	//timeout after 60 seconds
	$fp = fsockopen("www.clearink.com", 80, 
		&$error_number, &$error_description,
		60);

	if($fp)
	{
		//set non-blocking mode
		set_socket_blocking($fp, FALSE);

		// tell server we want root document
		fputs($fp, "GET / HTTP/1.0");
		fputs($fp, "\r\n\r\n");

		while(!feof($fp)) 
		{
			//print next 4K
			print(fgets($fp, 4096));
		}
		
		//close connection
		fclose($fp);

	}
	else
	{
		//$connect was false
		print("An error occurred!<BR>\n");
		print("Number: $error_number<BR>\n");
		print("Description: $error_description<BR>\n");
	}
?>
