<?
	/*
	** Write "Hello, World!" vertically
	*/

	//create blue square
	$image = imagecreate(50, 200);
	$colorBlue = imagecolorallocate($image, 128, 128, 255);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0, 0, $colorYellow);

	//draw some text with loaded font 
	imagestringup($image, 4, 10, 150, "Hello World!", $colorBlack);
	
	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>