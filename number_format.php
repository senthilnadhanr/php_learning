<HTML>
<HEAD>
<TITLE>number_format</TITLE>
</HEAD>
<BODY>
<?
	$test_number = 123456789.123456789;

	//add commas, drop any fraction
	print(number_format($test_number) . "<BR>\n");

	//add commas and limit to two digit precision
	print(number_format($test_number, 2) . "<BR>\n");

	//format for Germans
	print(number_format($test_number, 2, ",", ".") . "<BR>\n");
?>
</BODY>
</HTML>