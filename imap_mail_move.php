<HTML>
<HEAD>
<TITLE>imap_mail_move</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");
	imap_mail_move($mailbox, "OLD", "17");
	imap_close($mailbox);
?>
</BODY>
</HTML>