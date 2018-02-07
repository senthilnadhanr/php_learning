<HTML>
<HEAD>
<TITLE>imap_headers</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com}INBOX", "leon", "password");
	$headers = imap_headers($mailbox);
	for($index = 0; $index < count($headers); $index++)
	{
		print($headers[$index] . "<BR>\n");
	}
	imap_close($mailbox);
?>
</BODY>
</HTML>