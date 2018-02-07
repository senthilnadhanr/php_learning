<HTML>
<HEAD>
<TITLE>imap_rfc822_parse_adrlist</TITLE>
</HEAD>
<BODY>
<?
	$address = "Leon Atkinson <leon@clearink.com>, vicky";
	$info = imap_rfc822_parse_adrlist($address, "clearink.com");
	while(list($adr_info) = each($info))
	{
		print("$adr_info->personal ");
		print("$adr_info->mailbox ");
		print("$adr_info->host ");
		print("$adr_info->adl<BR>\n");
	}
?>
</BODY>
</HTML>