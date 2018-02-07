<?
	/*
	** Draw text using a Postscript font
	** Make the image the correct size
	*/

	//set parameters for text
	$font_file = "ComputerModern-Roman";
	$size = 20;
	$angle = 0;
	$text = "PHP";
	$antialias_steps = 16;
	$spacing = 0;
	$letting = 0;
	
	//Load font
	if(!($myFont = imagepsloadfont($font_file)))
	{
		print("Unable to load font!");
		exit();
	}
	
	//set encoding
	imagepsencodefont("IsoLatin1.enc");

	//get bounding box
	$Box = imagepsbbox($text, $myFont, $size, $spacing, $letting, $angle);

	//create an image with ten extra pixels
	$image = imagecreate($Box[1]+10, $Box[3]+10);
	$colorRed = imagecolorallocate($image, 0, 0, 0);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 10, 10, $colorRed);

	//write the text
	imagepstext($image, $text, $myFont, $size, 
		$colorBlack, $colorRed, 
		0, 0, $spacing, $letting, 
		$angle, $antialias_steps); 

	//unload font
	imagepsfreefont($myFont); 

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>