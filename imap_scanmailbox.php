<HTML>
<HEAD>
<TITLE>imap_scanmailbox</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{news.server.com/nntp:119}", "leon", "password");
	$name = imap_scanmailbox($mailbox, "alt.");
	while(list($match) = each($name))
	{
		print("$match<BR>\n");
	}
	imap_close($mailbox);
?>
</BODY>
</HTML>