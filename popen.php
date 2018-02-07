<HTML>
<HEAD>
<TITLE>popen</TITLE>
</HEAD>
<BODY>
<?
	/*
	** see who's logged in
	*/
	$myPipe = popen("who", "r");
	
	while(!feof($myPipe))
	{
		print(nl2br(fgets($myPipe, 255))); 
	}
	
	pclose($myPipe);
?>
</BODY>
</HTML>