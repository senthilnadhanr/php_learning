<HTML>
<HEAD>
<TITLE>gamma_correct_tag</TITLE>
</HEAD>
<BODY>
<?
	//go from Windows gamma to Macintosh gamma
	$color = gamma_correct_tag("#CC0000", 2.2, 1.571);

	print("<FONT COLOR=\"$color\">");
	print("Sample Text");
	print("</FONT>");
?>
</BODY>
</HTML>