<?
	/*
	** Show image with a dashed line
	*/

	//create yellow square
	$image = imagecreate(200,200);
	$colorBlue = imagecolorallocate($image, 0, 0, 255);
	$colorYellow = imagecolorallocate($image, 255, 255, 0);
	imagefill($image, 0, 0, $colorYellow);

	//draw dashed line in blue
	imagedashedline($image, 10, 10, 150, 130, $colorBlue);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
