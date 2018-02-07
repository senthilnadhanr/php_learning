<HTML>
<HEAD>
<TITLE>tmpfile</TITLE>
</HEAD>
<BODY>
<?
	//open a temporary file
	$fp = tmpfile();
	
	//write 10K of random data
	//to simulate some process
	for($i=0; $i<10240; $i++)
	{
		//randomly choose a letter 
		//from a range of printables
		fputs($fp, chr(rand(ord(' '),ord('z'))));
	}
	
	//return to start of file
	rewind($fp);

	//dump and close file, 
	//therefore deleting it
	fpassthru($fp);
?>
</BODY>
</HTML>