<HTML>
<HEAD>
<TITLE>get_browser</TITLE>
</HEAD>
<BODY>
<?
	$browser = get_browser();
	print("You are using " . $browser->browser . "<BR>\n");
	if($browser->javascript)
	{
		print("Your browser supports JavaScript.<BR>\n");
	}
?>
</BODY>
</HTML>