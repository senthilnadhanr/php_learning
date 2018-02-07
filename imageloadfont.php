<?
	/*
	** Load a font and display some text
	*/
	
	//create red square
	$image = imagecreate(200,200);
	$colorRed = imagecolorallocate($image, 255, 0, 0);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0, 0, $colorRed);

	//load font 
	if(!($myFont = imageloadfont("myFont")))
	{
		print("Unable to load font!");
		exit();
	}

	//draw some text with loaded font 
	imagestring($image, $myFont, 10, 10, 
		"Hello World!", $colorBlack);
	
	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
