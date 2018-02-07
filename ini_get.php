<HTML>
<HEAD>
<TITLE>ini_get</TITLE>
</HEAD>
<BODY>
<?
	//see what SMTP is now
	print(ini_get("SMTP") . "<BR>\n");

	//change to bogus value
	ini_alter("SMTP", "mail.corephp.com");
	print(ini_get("SMTP") . "<BR>\n");

	//return to original
	ini_restore("SMTP");
	print(ini_get("SMTP") . "<BR>\n");
?>
</BODY>
</HTML>