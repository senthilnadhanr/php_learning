<HTML>
<HEAD>
<TITLE>mktime</TITLE>
</HEAD>
<BODY>
<?
	print("Fifty Hours from Now: ");
	print(date("h:i A l F dS, Y", mktime(date("h")+50)));
	print("<BR>\n");
?>
</BODY>
</HTML>