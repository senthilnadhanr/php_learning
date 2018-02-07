<HTML>
<HEAD>
<TITLE>imap_unsubscribe</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");

	imap_unsubscribe($mailbox, "PHP");

	imap_close($mailbox);
?>
</BODY>
</HTML>