<?
	/*
	** mark this site as being visited
	** for the next 24 hours
	*/
	setcookie("HasVisitedLast24Hours", "Yes", time()+86400);
?>
<HTML>
<HEAD>
<TITLE>setcookie</TITLE>
</HEAD>
<BODY>
<?
	if(isset($HasVisitedLast24Hours))
	{
		print("Cookie received\n");
	}
	else
	{
		print("Cookie created\n");
	}
?>
</BODY>
</HTML>