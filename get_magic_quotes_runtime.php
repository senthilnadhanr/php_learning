<HTML>
<HEAD>
<TITLE>get_magic_quotes_runtime</TITLE>
</HEAD>
<BODY>
<?
	if(get_magic_quotes_runtime() == 1)
	{
		print("magic_quotes_runtime is on");
	}
	else
	{
		print("magic_quotes_runtime is off");
	}
?>
</BODY>
</HTML>