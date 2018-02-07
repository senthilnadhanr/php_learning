<HTML>
<HEAD>
<TITLE>strpos</TITLE>
</HEAD>
<BODY>
<?php
	$text = "Hello, World! World World";

	//check for a space
	if(strpos($text, 32))
	{
		print("There is a space in '$text'<BR>\n");
	}
	
	//find where in the string World appears
	print("World is at position " . strpos($text, "World") . "<BR>\n");
	print("World is at position " . strrpos($text, "World") . "<BR>\n");
?>
</BODY>
</HTML>