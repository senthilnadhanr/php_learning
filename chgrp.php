<HTML>
<HEAD>
<TITLE>chgrp</TITLE>
</HEAD>
<BODY>
<?
	if(chgrp("log.txt", "editors"))
	{
		print("log.txt changed to editors group");
	}
	else
	{
		print("log.txt not changed to editors group");
	}
?>
</BODY>
</HTML>
