<HTML>
<HEAD>
<TITLE>chmod</TITLE>
</HEAD>
<BODY>
<?
	/* 
	** allow everyone to read and write to file
	** when running PHP under UNIX
	*/
	if(chmod("data.txt", 0666))
	{
		print("mode change successful");
	}
	else
	{
		print("mode change unsuccessful");
	} 
?>
</BODY>
</HTML>
