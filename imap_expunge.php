<HTML>
<HEAD>
<TITLE>imap_expunge</TITLE>
</HEAD>
<BODY>
<?
	//expunge messages
	$mailbox = imap_open("{mail.server.com}INBOX",
		"leon", "password");
	imap_expunge($mailbox);
	imap_close($mailbox);
?>
</BODY>
</HTML>