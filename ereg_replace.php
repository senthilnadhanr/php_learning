<HTML>
<HEAD>
<TITLE>ereg_replace</TITLE>
</HEAD>
<BODY>
<?
	// swap newlines for break tags
	$text = "line1\nline2\nline3\n";
	print(ereg_replace("\n", "<BR>", $text));

	print("<HR>\n");

	//mix up these words
	$text = "one two three four";
	print(ereg_replace("([a-z]+) ([a-z]+) ([a-z]+) ([a-z]+)", 
		"\\4 \\2 \\1 \\3", $text));
?>
</BODY>
</HTML>