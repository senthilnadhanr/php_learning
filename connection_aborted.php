<HTML>
<HEAD>
<TITLE>connection_aborted</TITLE>
</HEAD>
<BODY>
<?
	//allow script continuation if aborted
	ignore_user_abort(TRUE);
	
	//fake a long task
	sleep(20);
	
	//check for abort
	if(connection_aborted())
	{
		//write to log that the process was aborted
		openlog("TEST", LOG_PID | LOG_CONS, LOG_USER);
		syslog(LOG_INFO, "The fake task has been aborted!");
		closelog();
	}
	else
	{
		print("Thanks for waiting!\n");
	}
?>
</BODY>
</HTML>