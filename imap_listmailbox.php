<HTML>
<HEAD>
<TITLE>imap_listmailbox</TITLE>
</HEAD>
<BODY>
<?
	$mailbox=imap_open("{mail.server.com}INBOX", "leon","password");
	$mailboxes = imap_listmailbox($mailbox);
	for($index = 0; $index < count($mailboxes); $index++)
	{
		print($mailboxes[$index] . "<BR>\n");
	}
	imap_close($mailbox);
?>
</BODY>
</HTML>