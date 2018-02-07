<HTML>
<HEAD>
<TITLE>imap_sort</TITLE>
</HEAD>
<BODY>
<?
	$mailbox = imap_open("{mail.server.com:143}", "leon", "password");
	$list = imap_sort($mailbox, SORTFROM, 0, SE_NOPREFETCH);
	while(list($msg_num) = each($list))
	{
		print("$msg_num ");
	}
	imap_close($mailbox);
?>
</BODY>
</HTML>