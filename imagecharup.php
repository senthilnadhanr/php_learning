<?
	/*
	** Draw vertical 'M' in each of the built-in fonts
	*/

	//create white square
	$image = imagecreate(200,200);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	$colorWhite = imagecolorallocate($image, 255,255,255);
	imagefill($image, 0, 0, $colorWhite);

	//draw an M in each built-in font 
	imagecharup($image, 1, 10, 10, "M", $colorBlack);
	imagecharup($image, 2, 30, 30, "M", $colorBlack);
	imagecharup($image, 3, 50, 50, "M", $colorBlack);
	imagecharup($image, 4, 70, 70, "M", $colorBlack);
	imagecharup($image, 5, 90, 90, "M", $colorBlack);

	//send image
	header("Content-type: image/gif");
	imagejpeg($image);
?>