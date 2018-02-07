<HTML>
<HEAD>
<TITLE>imagecolorstotal</TITLE>
</HEAD>
<BODY>
<?
	/*
	** Find number of colors in an image
	*/

	//attempt to open image, suppress error messages
	if(!($image = @imagecreatefromjpeg("php_lang.jpg")))
	{
		//error, so print error message
		print("Couldn't load image!");
	}
	else
	{
		print("Total Colors: " . imagecolorstotal($image));
	}
?>
</BODY>
</HTML>