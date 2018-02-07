<HTML>
<HEAD>
<TITLE>ignore_user_abort</TITLE>
</HEAD>
<BODY>
<?
	function fakeProcess($name)
	{
		print("Start of fake process.<BR>\n");
		flush();
		sleep(10);
		print("End of fake process.<BR>\n");

		//write message to log
		$statusMessage = date("Y-m-d H:i:s") . " Fake process $name completed\n";
		error_log($statusMessage, 3, "status.log");
	}

	//finish script even if user
	//aborts execution
	ignore_user_abort(TRUE);
	
	fakeProcess("one");

	//allow aborts again
	ignore_user_abort(FALSE);

	fakeProcess("two");
?>
</BODY>
</HTML>