<HTML>
<HEAD>
<TITLE>mcrypt_get_cipher_name</TITLE>
</HEAD>
<BODY>
<?
	//create array of encryption algorithms
	$algorithm = array(
		3DES, 3WAY, BLOWFISH_128, BLOWFISH_192, BLOWFISH_256, 
		BLOWFISH_448, CAST_128, CAST_256, DES, GOST, IDEA, LOKI97, 
		RC2_1024, RC2_128, RC2_256, RC4, RC6_128, RC6_192, RC6_256, 
		RIJNDAEL_128, RIJNDAEL_192, RIJNDAEL_256, SAFERPLUS, 
		SAFER_128, SAFER_64, SERPENT_128, SERPENT_192, SERPENT_256, 
		TWOFISH_128, TWOFISH_192, TWOFISH_256, XTEA);

	print("<TABLE BORDER=\"1\">\n");

	print("<TR>\n");
	print("<TH>Name</TH>\n");
	print("<TH>Block Size</TH>\n");
	print("<TH>Key Size</TH>\n");
	print("</TR>\n");


	//loop over each one
	foreach($algorithm as $value)
	{
		print("<TR>\n");
		print("<TD>" . mcrypt_get_cipher_name($value) . "</TD>");
		print("<TD>" . mcrypt_get_block_size($value) . "</TD>");
		print("<TD>" . mcrypt_get_key_size($value) . "</TD>");
		print("</TR>\n");
	}

	print("</TABLE>\n");
?>
</BODY>
</HTML>