<HTML>
<HEAD>
<TITLE>imap_num_msg</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");
	print("Number of Messages: " . imap_num_msg($mailbox));
	imap_close($mailbox);
?>
</BODY>
</HTML>