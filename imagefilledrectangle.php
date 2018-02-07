<?
	/*
	** Draw a black square
	*/

	//create green square
	$image = imagecreate(200,200);
	$colorGreen = imagecolorallocate($image, 128, 255, 128);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0, 0, $colorRed);

	//draw a black rectangle 
	imagefilledrectangle($image, 
		10, 10, 90, 90,
		$colorBlack);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
