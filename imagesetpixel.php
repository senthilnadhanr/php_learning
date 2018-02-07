<?
	/*
	** Draw 100 black dots
	*/

	//create yellow square
	$image = imagecreate(100, 100);
	$colorYellow = imagecolorallocate($image, 255, 255, 0);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0, 0, $colorYellow);

	//draw 100 random black dots
	srand(time());
	for($i=0; $i < 100; $i++)
	{ 
		imagesetpixel($image, rand(0, 99), rand(0, 99), $colorBlack);
	}
	
	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
