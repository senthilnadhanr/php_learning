<HTML>
<HEAD>
<TITLE>connection_status</TITLE>
</HEAD>
<BODY>
<?
	function cleanUp()
	{
		$status = connection_status();
		
		$statusMessage = date("Y-m-d H:i:s");
		$statusMessage .= " Status was $status. ";
		
		if($status & ABORTED)
		{
			$statusMessage .= "The script was aborted. ";
		}
	
		if($status & TIMEOUT)
		{
			$statusMessage .= "The script timed out. ";
		}

		$statusMessage .= "\n";

		//write status to log file
		error_log($statusMessage, 3, "status.log");
	}
	
	//set cleanUp to the shutdown function
	register_shutdown_function("cleanUp");

	//wait out the max execution time
	sleep(35);
	
	print("Fake task finished.\n");	
?>
</BODY>
</HTML>