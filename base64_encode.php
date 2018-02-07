<HTML>
<HEAD>
<TITLE>base64_encode</TITLE>
</HEAD>
<BODY>
<?
	$text = "This is a \nmulti-line message\n";
	print(base64_encode($text));
?>
</BODY>
</HTML>