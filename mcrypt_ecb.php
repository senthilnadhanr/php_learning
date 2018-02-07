<HTML>
<HEAD>
<TITLE>mcrypt_ecb</TITLE>
</HEAD>
<BODY>
<?
	//set up test data
	$message = "This message is sensitive.";
	$key = "secret";

	//encrypt message
	$code = mcrypt_ecb(MCRYPT_BLOWFISH_128, $key, $message, MCRYPT_ENCRYPT);

	//pring decrypted message
	print(mcrypt_ecb(MCRYPT_BLOWFISH_128, $key, $code, MCRYPT_DECRYPT));	
?>
</BODY>
</HTML>