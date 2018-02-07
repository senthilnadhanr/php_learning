<?
	/*
	** Draw text using a Postscript font
	** Draw normal, stretched and slanted
	*/

	//set parameters for text
	$font_file = "ComputerModern-Roman";
	$size = 20;
	$angle = 0;
	$text = "PHP";
	$antialias_steps = 16;
	$spacing = 0;
	$letting = 0;

	//create red square
	$image = imagecreate(300, 300);
	$colorRed = imagecolorallocate($image, 0xFF, 0x00, 0x00);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 10, 10, $colorRed);

	//Load font
	if(!($myFont = imagepsloadfont($font_file)))
	{
		print("Unable to load font!");
		exit();
	}
	
	//make extended font
	$myFontExtended = imagepscopyfont($myFont);
	imagepsextendfont($myFont, 1.5);

	//make slanted font
	$myFontSlanted = imagepscopyfont($myFont);
	imagepsslantfont($myFont, 1.5);

	//write normal text
	imagepstext($image, $text, $myFont, $size, 
		$colorBlack, $colorRed, 
		0, 0, $spacing, $letting, 
		$angle, $antialias_steps); 

	//write extended text
	imagepstext($image, $text, $myFont, $size, 
		$colorBlack, $colorRed, 
		0, $size, $spacing, $letting, 
		$angle, $antialias_steps); 

	//write slanted text
	imagepstext($image, $text, $myFont, $size, 
		$colorBlack, $colorRed, 
		0, $size*2, $spacing, $letting, 
		$angle, $antialias_steps); 

	//unload fonts
	imagepsfreefont($myFont); 
	imagepsfreefont($myFontExtended); 
	imagepsfreefont($myFontSlanted); 

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>