<HTML>
<HEAD>
<TITLE>preg_split</TITLE>
</HEAD>
<BODY>
<?
	$paragraph = "This is a short paragraph.  Each ";
	$paragraph .= "sentence will be extracted by ";
	$paragraph .= "the preg_split function.  As a ";
	$paragraph .= "result, you will be amazed!";

	$sentence = preg_split("/[\.\!\?]/", $paragraph);

	for($index = 0; $index < count($sentence); $index++)
	{
		print("$index. $sentence[$index] <BR>\n");
	} 
?>
</BODY>
</HTML>