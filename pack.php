<HEAD>
<TITLE>pack</TITLE>
</HEAD>
<BODY>
<?
	//create some packed data
	$packedData = pack("ca10n", 65, "hello", 1970);

	//display ASCII code for each character
	print("<PRE>");
	for($i=0; $i<strlen($packedData); $i++)
	{
		print("0x" . dechex(ord($packedData[$i])) . " ");
	}
	print("</PRE>\n");

	//unpack the data
	$Data = unpack("cOne/a10Two/nThree", $packedData);
	
	//show all elements of the unpacked array
	while(list($key, $value) = each($Data))
	{
		print("$key = $value <BR>\n");
	}
?>
</BODY>
</HTML>