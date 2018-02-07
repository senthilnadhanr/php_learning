<?
	/*
	** Print "Hello, World!" in black
	*/

	//create yellow square
	$image = imagecreate(150, 50);
	$colorYellow = imagecolorallocate($image, 255, 255, 0);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0, 0, $colorYellow);

	//draw some text with loaded font 
	imagestring($image, 4, 10, 10, "Hello World!", $colorBlack);
	
	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>
