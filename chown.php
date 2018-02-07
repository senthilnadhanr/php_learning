<HTML>
<HEAD>
<TITLE>chown</TITLE>
</HEAD>
<BODY>
<?
	/*
	** change owner to leon
	*/
	if(chown("data.txt","leon"))
	{
			print("owner changed");
	}
	else
	{
			print("couldn't change owner");
	}
?>
</BODY>
</HTML>