<?
	/*
	** Create an image, then free its memory
	*/

	//create blue square
	$image = imagecreate(200,200);
	$colorBlue = imagecolorallocate($image, 128, 128, 255);
	imagefill($image, 0, 0, $colorBlue);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);

	//free memory associated with image 
	imagedestroy($image);
?>
