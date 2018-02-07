<?
	/*
	** Draw a hollow black rectangle
	*/

	//create yellow square
	$image = imagecreate(200,200);
	$colorYellow = imagecolorallocate($image, 255, 255, 0);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0, 0, $colorYellow);

	//draw a black rectangle 
	imagerectangle($image, 10, 10, 150, 150, $colorBlack);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
