<HTML>
<HEAD>
<TITLE>shm_remove</TITLE>
</HEAD>
<BODY>
<?
	/*
	** Shared Memory example 2
	**
	** This example removes shared memory created
	** by the previous shared memory example.
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
		
		//remove variable
		shm_remove_var($mem, SHMVAR_MESSAGE);
		
		//remove shared memory
		shm_remove($mem);
		
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