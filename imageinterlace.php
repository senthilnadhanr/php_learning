<?
	/*
	** Create interlaced image
	*/
	
	//create red square
	$image = imagecreate(200,200);
	$colorRed = imagecolorallocate($image, 255, 0, 0);
	imagefill($image, 0, 0, $colorRed);

	//set as interlaced 
	imageinterlace($image, TRUE);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
