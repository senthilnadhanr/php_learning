<HTML>
<HEAD>
<TITLE>gettext</TITLE>
</HEAD>
<BODY>
<?
	//set language to Spanish
	putenv("LANG=es");
	
	//specify location of translation tables
	bindtextdomain("error_messages", "./locale");

	//choose domain
	textdomain("error_messages");

	//print a test message
	print(gettext("This book is named Core PHP Programming"));
?>
</BODY>
</HTML>