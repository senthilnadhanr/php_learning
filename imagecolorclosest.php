<?
	/*
	** Compare closest color to real color
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

	//find index of color closest to pure magenta 
	$magentaIndex = imagecolorclosest($image, 255, 0, 255);

	//get RGB values
	$colorArray = imagecolorsforindex($image, $magentaIndex);

	//allocate closest color
	$colorMagenta = imagecolorallocate($image, 
		$colorArray["red"], 
		$colorArray["green"], 
		$colorArray["blue"]);

	//draw a square 
	imagefilledrectangle($image, 10, 10, 100, 100, $colorMagenta);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
