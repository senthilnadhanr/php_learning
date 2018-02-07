<?
	/*
	** Draw a black triangle
	*/

	//create red square
	$image = imagecreate(200,200);
	$colorRed = imagecolorallocate($image, 255, 0, 0);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0, 0, $colorRed);

	//set up three points of the triangle
	$points = array(100, 10, 50, 60, 150, 60);

	//draw triangle 
	imagefilledpolygon($image, 
		$points, count($points)/2,
		$colorBlack);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
