<HTML>
<HEAD>
<TITLE>imap_deletemailbox</TITLE>
</HEAD>
<BODY>
<?
	// delete a mailbox 
	$mailbox = imap_open("{mail.server.com}INBOX",
		"leon","password");
	imap_deletemailbox($mailbox, "PHP List");
	imap_close($mailbox);
?>
</BODY>
</HTML>