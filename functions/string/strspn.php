<HTML>
<HEAD>
<TITLE>strspn</TITLE>
</HEAD>
<BODY>
<?php
	$text = "cabbageabc";
	$set = "abc";
	$position = strspn($text, $set);

	echo $position;
	echo strspn("Hello world!","kHlleo");
	// prints 'cabba'
	//print(substr($text, 0, $position));
?>
</BODY>
</HTML>