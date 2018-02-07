<?
	/*
	** Create a red square
	*/

	//create red square
	$image = imagecreate(200,200);
	$colorRed = imagecolorallocate($image, 255, 0, 0);
	imagefill($image, 0, 0, $colorRed);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
