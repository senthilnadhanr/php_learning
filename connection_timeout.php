<HTML>
<HEAD>
<TITLE>connection_timeout</TITLE>
</HEAD>
<BODY>
<?
	function cleanUp()
	{
		if(connection_timeout())
		{
			$statusMessage = date("Y-m-d H:i:s");
			$statusMessage .= " The script timed out. \n";
	
			//write status to log file
			error_log($statusMessage, 3, "status.log");
		}
	}
	
	//set cleanUp to the shutdown function
	register_shutdown_function("cleanUp");

	//wait out the max execution time
	while(true);
	
	print("Fake task finished.\n");	
?>
</BODY>
</HTML>