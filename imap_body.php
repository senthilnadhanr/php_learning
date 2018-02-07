<HTML>
<HEAD>
<TITLE>imap_body</TITLE>
</HEAD>
<BODY>
<?
	// get first message and print it 
	$mailbox = imap_open("{mail.server.com}INBOX",
		"leon","password");
	$message = imap_body($mailbox, FT_INTERNAL);
	imap_close($mailbox);

	print($message);
?>
</BODY>
</HTML>