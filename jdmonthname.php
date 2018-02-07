<HTML>
<HEAD>
<TITLE>jdmonthname</TITLE>
</HEAD>
<BODY>
<?
	$jdc = gregoriantojd(1,1,1800);
	print(jdmonthname($jdc, 0) . "<BR>\n");
	print(jdmonthname($jdc, 1) . "<BR>\n");
	print(jdmonthname($jdc, 2) . "<BR>\n");
	print(jdmonthname($jdc, 3) . "<BR>\n");
	print(jdmonthname($jdc, 4) . "<BR>\n");
	print(jdmonthname($jdc, 5) . "<BR>\n");
?>
</BODY>
</HTML>