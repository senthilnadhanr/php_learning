<HTML>
<HEAD>
<TITLE>split</TITLE>
</HEAD>
<BODY>
<?
	$paragraph = "This is a short paragraph.  Each ";
	$paragraph .= "sentence will be extracted by ";
	$paragraph .= "the split function.  As a ";
	$paragraph .= "result,  you will be amazed!";

	$sentence = split("[\.\!\?]", $paragraph);

	for($index = 0; $index < count($sentence); $index++)
	{
		print("$index. $sentence[$index] <BR>\n");
	} 
?>
</BODY>
</HTML>