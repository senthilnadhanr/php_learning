<HTML>
<HEAD>
<TITLE>imap_status</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");
	$status = imap_status($mailbox, "INBOX", SA_UNSEEN | SA_MESSAGES);
	print("$status->unseen of $status->messages new messages");
	imap_close($mailbox);
?>
</BODY>
</HTML>