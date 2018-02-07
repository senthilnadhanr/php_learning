<HTML>
<HEAD>
<TITLE>imap_reopen</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");

	// if connection is dead, reopen 
	if(!imap_ping($mailbox))
	{
		imap_reopen($mailbox, "leon", "password");
	}

	imap_close($mailbox);
?>
</BODY>
</HTML>