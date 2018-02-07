<HTML>
<HEAD>
<TITLE>register_shutdown_function</TITLE>
</HEAD>
<BODY>
<?
	function shutdown()
	{
		print("<!-- Script Terminated -->\n");
	}

	register_shutdown_function("shutdown");
?>
</BODY>
</HTML>