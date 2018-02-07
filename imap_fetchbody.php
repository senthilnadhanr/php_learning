<HTML>
<HEAD>
<TITLE>imap_fetchbody</TITLE>
</HEAD>
<BODY>
<?
	// get first part of first message 
	$mailbox=imap_open("{mail.server.com}INBOX",
		"leon","password");
	$part1 = imap_fetchbody($mailbox, 1, 1);
	imap_close($mailbox);
?>
</BODY>
</HTML>