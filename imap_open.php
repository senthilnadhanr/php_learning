<HTML>
<HEAD>
<TITLE>imap_open</TITLE>
</HEAD>
<BODY>
<?
	//connect to a normal IMAP server
	$mailbox = imap_open("{mail.server.com:143}INBOX", "leon", "password");

	//connect to a POP3 server
	$mailbox = imap_open("{mail.server.com/pop3:110}INBOX", "leon", "password");

	//connect to a NNTP server
	$mailbox = imap_open("{mail.server.com/nntp:119}INBOX", "leon", "password");
?>
</BODY>
</HTML>