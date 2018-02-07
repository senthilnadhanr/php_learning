<HTML>
<HEAD>
<TITLE>imap_ping</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");
	imap_ping($mailbox);
	imap_close($mailbox);
?>
</BODY>
</HTML>