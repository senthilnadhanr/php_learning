<HTML>
<HEAD>
<TITLE>get_magic_quotes_gpc</TITLE>
</HEAD>
<BODY>
<?
	if(get_magic_quotes_gpc() == 1)
	{
		print("magic_quotes_gpc is on");
	}
	else
	{
		print("magic_quotes_gpc is off");
	}
?>
</BODY>
</HTML>