<HTML>
<HEAD>
<TITLE>strstr</TITLE>
</HEAD>
<BODY>
<?php
	$text = "Although this is a string, it's not very long.";
	if(strstr($text, "string") != "")
	{
		print("The string contains 'it'.<BR>/n");
	}
?>
</BODY>
</HTML>