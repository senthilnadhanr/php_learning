<HTML>
<HEAD>
<TITLE>imap_createmailbox</TITLE>
</HEAD>
<BODY>
<?
	// create a mailbox called PHP List 
	$mailbox = imap_open("{mail.server.com}INBOX", "leon","password");
	imap_createmailbox($mailbox, "PHP List");
	imap_close($mailbox);
?>
</BODY>
</HTML>