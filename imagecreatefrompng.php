<?
	//load an image and display it 
	$image = imagecreatefrompng("php.png");
	header("Content-type: image/png");
	imagepng($image);
?>
