<HTML>
<HEAD>
<TITLE>imap_header</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX",
		"leon", "password");
	$header = imap_header($mailbox, 1);
	print("Subject: " . $header->subject);
	imap_close($mailbox);
?>
</BODY>
</HTML>