<HTML>
<HEAD>
<TITLE>imap_renamemailbox</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");
	imap_renamemailbox($mailbox, "PHP", "PHP List");
	imap_close($mailbox);
?>
</BODY>
</HTML>