<?
	/*
	** Check that an image contains black
	** If so, change all black to cyan.
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

	//find index of black 
	$blackIndex = imagecolorexact($image, 0, 0, 0);

	if($blackIndex >= 0)
	{
		//make all black areas cyan 
		imagecolorset($image, $blackIndex, 0, 255, 255);
	}

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
