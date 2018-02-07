<HTML>
<HEAD>
<TITLE>parse_url</TITLE>
</HEAD>
<BODY>
<?
	$query = "http://leon:secret@www.leonatkinson.com:80";
	$query .= "/test/test.php3?";
	$query .= "name=Leon&occupation=Web+Engineer";
	$url = parse_url($query);

	print("<PRE>");
	print_r($url);
	print("</PRE>\n");

?>
</BODY>
</HTML>