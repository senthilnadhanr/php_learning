<HTML>
<HEAD>
<TITLE>file_exists</TITLE>
</HEAD>
<BODY>
<?php
	$filename = "data.txt";

	//if the file exists, print it
	if(file_exists($filename))
	{
		readfile($filename);
	}
	else
	{
		print("'$filename' does not exist");
	}
?>
</BODY>
</HTML>