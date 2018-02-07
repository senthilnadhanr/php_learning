<?
	/*
	** Put a rectangle in the center of any image
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
	}

	//find center	
	$centerX = intval(imagesx($image)/2);
	$centerY = intval(imagesy($image)/2);

	$colorGreen = imagecolorallocate($image, 0, 255, 0);

	//draw a green rectangle in center 
	imagefilledrectangle($image, 
		($centerX-15), ($centerY-15), 
		($centerX+15), ($centerY+15), 
		$colorGreen);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
