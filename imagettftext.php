<?
	/*
	** Draw text using a TrueType font
	** Also, draw a box around the text.
	*/

	//set parameters for text
	$size = 40;
	$angle = 30;
	$startX = 50;
	$startY = 100;
	
	//create red square
	$image = imagecreate(200, 200);
	$colorRed = imagecolorallocate($image, 255, 0, 0);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 10, 10, $colorRed);

	//get bounding box
	$Box = imagettfbbox($size, $angle, "comic.ttf", "PHP");

	//move bounding box to starting point (100,100)
	for($index = 0; $index < count($Box); $index += 2)
	{
		$Box[$index] += $startX;
		$Box[$index+1] += $startY;
	}
	
	//draw bounding box
	imagepolygon($image, $Box, count($Box)/2, $colorBlack);
	
	//write the text
	imagettftext($image, $size, $angle, 
		$startX, $startY, $colorBlack, 
		"comic.ttf", "PHP");

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
