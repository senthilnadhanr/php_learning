<HTML>
<HEAD>
<TITLE>imap_mailboxmsginfo</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");
	$info = imap_mailboxmsginfo($mailbox);
	print("Driver: " . $info->Driver);
	imap_close($mailbox);
?>
</BODY>
</HTML>