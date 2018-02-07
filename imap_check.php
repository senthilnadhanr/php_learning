<HTML>
<HEAD>
<TITLE>imap_check</TITLE>
</HEAD>
<BODY>
<?
	//check for new messages

	$mailbox = imap_open("{mail.server.com}INBOX", "leon","secret");

	// Check messages 
	$check = imap_check($mailbox);
	print($check->Date,"<br>\n");
	print("Connection Type: ",$check->Driver,"<br>\n");
	print("Mbox: ",$check->Mailbox,"<br>\n");
	print("Number Messages: ",$check->Nmsgs);
	print("Recent: ",$check->Recent,"<br>\n");

	// show headers for messages 
	$nMessages=imap_num_msg($mailbox);
	for($index=1; $index <= $nMesssages ; $index++)
	{
		$header = imap_header($mailbox, $index);
		print($header->date . "<BR>\n");
		print($header->to . "<BR>\n");
		print($header->from . "<BR>\n");
		print($header->cc . "<BR>\n");
		print($header->replyto . "<BR>\n");
		print($header->subject . "<BR>\n");
		print("<BR>\n");
        print("<PRE>");
		print(imap_body($mbox,$i));
		print("</PRE>\n<HR>\n");
	}

	imap_close($mbox);
?>
</BODY>
</HTML>