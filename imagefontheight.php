<?
	/*
	** Create image just the right size for text
	*/

	$Text = "Core PHP Programming";
	$Font = 5;
	$Width = imagefontwidth($Font) * strlen($Text);
	$Height = imagefontheight($Font);
	
	//create green square
	$image = imagecreate($Width, $Height);
	$colorGreen = imagecolorallocate($image, 128, 255, 128);
	$colorBlack = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0, 0, $colorRed);

	//add text in black
	imagestring($image, $Font, 0, 0, $Text, $colorBlack);

	//send image
	header("Content-type: image/jpeg");
	imagejpeg($image);
?>