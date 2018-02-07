<HTML>
<HEAD>
<TITLE>imap_setflag_full</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com:143}INBOX", "leon", "password");
	imap_setflag_full($mailbox, "12-15", "U", ST_UID);
	imap_close($mailbox);
?>
</BODY>
</HTML>