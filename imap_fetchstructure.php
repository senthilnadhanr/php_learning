<HTML>
<HEAD>
<TITLE>imap_fetchstructure</TITLE>
</HEAD>
<BODY>
<?
	// get structure for first message 
	$mailbox = imap_open("{mail.server.com}INBOX",
		"leon", "password");
	$structure = imap_fetchstructure($mailbox, 1);
	imap_close($mailbox);
?>
</BODY>
</HTML>