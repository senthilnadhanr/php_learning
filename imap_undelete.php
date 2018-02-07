<HTML>
<HEAD>
<TITLE>imap_undelete</TITLE>
</HEAD>
<BODY>
<?
	// delete message number 3, then undelete 
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");
	imap_delete($mailbox, 3);
	imap_undelete($mailbox, 3);
	imap_close($mailbox);
?>
</BODY>
</HTML>