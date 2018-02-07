<HTML>
<HEAD>
<TITLE>sem_acquire</TITLE>
</HEAD>
<BODY>
<?
	/*
	** Semaphore example
	**
	** To see this in action, try opening two or more
	** browsers and load this script at the same time.
	** You should see that each script will execute the
	** fake procedure when it alone has acquired the
	** semaphore.  Pay attention to the output of the
	** microtime function in each browser window.
	*/

	//Define integer for this semaphore
	//This simply adds to readability
	define("SEM_COREPHP", 1970);

	//Get or create the semaphore
	//This semaphore can only be acquired once
	$sem = sem_get(SEM_COREPHP, 1);
	
	//acquire semaphore
	if(sem_acquire($sem))
	{
		//perform some atomic function
		print("Faking procedure... " . microtime());
		sleep(3);
		print("Finishing fake procedure... " . microtime());
		
		//release semaphore
		sem_release($sem);
	}
	else
	{
		//we failed to acquire the semaphore
		print("Failed to acquire semaphore!<BR>\n");	
	}

?>
</BODY>
</HTML>