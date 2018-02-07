<?
	/*
	** Create a red image with a transparent
	** square cut out of it.
	*/

	//create red square
	$image = imagecreate(200,200);
	$colorRed = imagecolorallocate($image, 255, 0, 0);
	$colorBlue = imagecolorallocate($image, 0, 0, 255);
	imagefill($image, 0, 0, $colorRed);

	//draw a smaller blue square 
	imagefilledrectangle($image, 30, 30, 70, 70, $colorBlue);

	//make blue transparent 
	imagecolortransparent($image, $colorBlue);

	//send image
	header("Content-type: image/png");
	imagepng($image);
?>
