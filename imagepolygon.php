<?
	/*
	** Draw a hollow black triangle
	*/

	//create red square
	$image = imagecreate(200,200);
	$colorRed = imagecolorallocate($image, 255, 0, 0);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0, 0, $colorRed);

	//set points of triangle
	$points = array(100, 10, 50, 60, 150, 60);

	//draw a black triangle 
	imagepolygon($image, 
		$points, count($points)/2, 
		$colorBlack);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
