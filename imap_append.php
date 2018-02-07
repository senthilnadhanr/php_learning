<HTML>
<HEAD>
<TITLE>imap_append</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon","password");
	imap_append($mailbox, "INBOX", "This is a message");
	imap_close($mailbox);
?>
</BODY>
</HTML>