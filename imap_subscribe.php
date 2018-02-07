<HTML>
<HEAD>
<TITLE>imap_subscribe</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX",
		"leon", "password");

	imap_subscribe($mailbox, "PHP");

	imap_close($mailbox);
?>
</BODY>
</HTML>