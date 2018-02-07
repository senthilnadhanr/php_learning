<HTML>
<HEAD>
<TITLE>shm_attach</TITLE>
</HEAD>
<BODY>
<?
	/*
	** Shared Memory example
	**
	** This example builds on the semaphore example
	** by using shared memory to communicate between
	** multiple processes.  This example creates shared
	** memory, but does not release it.  Make sure you
	** run the shm_remove example when you're done
	** experimenting with this example.
	*/

	//Define integer for semaphore key
	define("SEM_COREPHP", 1970);

	//Define integer for shared memory key
	define("SHM_COREPHP", 1970);

	//Define integer for variable key
	define("SHMVAR_MESSAGE", 1970);


	//Get or create the semaphore
	//This semaphore can only be acquired once
	$sem = sem_get(SEM_COREPHP, 1);
	
	//acquire semaphore
	if(sem_acquire($sem))
	{
		//attach to shared memory
		//make the memory 1K in size
		$mem = shm_attach(SHM_COREPHP, 1024);
		
		//attempt to get message variable, which
		//won't be there the first time
		if($old_message = shm_get_var($mem, SHMVAR_MESSAGE))
		{
			print("Previous value: $old_message<BR>\n");
		}
		
		//create new message
		$new_message = getmypid() . " here at " . microtime();
		
		//set new value
		shm_put_var($mem, SHMVAR_MESSAGE, $new_message);
		
		//detach from shared memory
		shm_detach($mem);
		
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