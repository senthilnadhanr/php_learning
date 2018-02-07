<HTML>
<HEAD>
<TITLE>imap_search</TITLE>
</HEAD>
<BODY>
<?
	//get list of unread messages from Leon 
	$mailbox = imap_open("{mail.server.com:143}INBOX", "leon", "password");
	$msgs = imap_search($mailbox, "UNSEEN FROM \"leon\"");
	imap_close($mailbox);
?>
</BODY>
</HTML>