<HTML>
<HEAD>
<TITLE>error_log</TITLE>
</HEAD>
<BODY>
<?
	//send log message via email to root
	error_log("The error_log is working", 1, "root", "");
?>
</BODY>
</HTML>