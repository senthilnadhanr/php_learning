<HTML>
<HEAD>
<TITLE>strcspn</TITLE>
</HEAD>
<BODY>
<?
	$text = "red cabbage";
	$set = "abc";
	$position = strcspn($text, $set);

	// prints 'red '
	print(substr($text, 0, $position));
?>
</BODY>
</HTML>