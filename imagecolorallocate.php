<?
	/*
	** Draw Red, Green, Blue circles
	*/
	
	//create white square
	$image = imagecreate(200,200);
	$colorWhite = imagecolorallocate($image, 255,255,255);
	$colorRed = imagecolorallocate($image, 255, 0, 0);
	$colorGreen = imagecolorallocate($image, 0, 255, 0);
	$colorBlue = imagecolorallocate($image, 0, 0, 255);
	imagefill($image, 0, 0, $colorWhite);

	//make red circle 
	imagearc($image, 50, 50, 100, 100, 0, 360, $colorRed);
	imagefilltoborder($image, 50, 50, $colorRed, $colorRed);

	//make green circle
	imagearc($image, 100, 50, 100, 100, 0, 360, $colorGreen);
	imagefilltoborder($image, 100, 50, $colorGreen, $colorGreen);

	//make blue circle
	imagearc($image, 75, 75, 100, 100, 0, 360, $colorBlue);
	imagefilltoborder($image, 75, 75, $colorBlue, $colorBlue);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
