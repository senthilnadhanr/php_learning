<HTML>
<HEAD>
<TITLE>mcrypt_ofb</TITLE>
</HEAD>
<BODY>
<?
	//set up test data
	$message = "This message is sensitive.";
	$key = "secret";
	$iv = mcrypt_create_iv(
		mcrypt_get_block_size(MCRYPT_BLOWFISH_128), 
		MCRYPT_DEV_RANDOM);


	//encrypt message
	$code = mcrypt_ofb(MCRYPT_BLOWFISH_128, $key, $message, MCRYPT_ENCRYPT, $iv);

	//pring decrypted message
	print(mcrypt_ofb(MCRYPT_BLOWFISH_128, $key, $code, MCRYPT_DECRYPT, $iv));	
?>
</BODY>
</HTML>