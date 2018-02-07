<HTML>
<HEAD>
<TITLE>imap_num_recent</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");
	print("Number of Messages: " . imap_num_recent($mailbox));
	imap_close($mailbox);
?>
</BODY>
</HTML>