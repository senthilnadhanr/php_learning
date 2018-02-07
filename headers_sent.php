<HTML>
<HEAD>
<TITLE>headers_sent</TITLE>
</HEAD>
<BODY>
<?
	if(headers_sent())
	{
		print("Can't add more headers!<BR>\n");
	}
	else
	{
		header("X-Debug: It's OK to send a header");
	}
?>
</BODY>
</HTML>