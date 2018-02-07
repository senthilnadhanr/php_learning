<?
	/*
	** Change a color
	*/
	
	//attempt to open image, suppress error messages
	if(!($image = @imagecreatefromjpeg("php_lang.jpg")))
	{
		//error, so create an error image and exit
		$image = imagecreate(200,200);
		$colorWhite = imagecolorallocate($image, 255, 255, 255);
		$colorBlack = imagecolorallocate($image, 0, 0, 0);
		imagefill($image, 0, 0, $colorWhite);
		imagestring($image, 4, 10, 10, "Couldn't load image!", $colorBlack);
		header("Content-type: image/jpeg");
		imagejpeg($image);
		exit();
	}

	//get the color at (10,10)
	$colorIndex = imagecolorat($image, 10, 10);

	//change that color to red 
	imagecolorset($image, $colorIndex, 255, 0, 0);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
