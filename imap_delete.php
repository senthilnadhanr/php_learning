<HTML>
<HEAD>
<TITLE>imap_delete</TITLE>
</HEAD>
<BODY>
<?
	// delete message number 3 
	$mailbox = imap_open("{mail.server.com}INBOX", "leon","password");
	imap_delete($mailbox, 3);
	imap_close($mailbox);
?>
</BODY>
</HTML>