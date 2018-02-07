<?
	/*
	** Draw solid black line
	*/

	//create cyan square
	$image = imagecreate(200,200);
	$colorCyan = imagecolorallocate($image, 0, 255, 255);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0, 0, $colorCyan);

	//draw solid, black line 
	imageline($image, 10, 10, 150, 130, $colorBlack);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
