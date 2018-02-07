<HTML>
<HEAD>
<TITLE>imagejpeg</TITLE>
</HEAD>
<BODY>
<?
	/* 
	** create a blue square, save to disk
	*/
	
	//create image if it doesn't exist, 
	//or it's older than an hour
	if(!file_exists("blue_square.jpg") OR 
		(filectime("blue_square.jpg") < (time() - 3600)))
	{
		//send debugging info
		print("<!--creating image-->\n");
		
		//create a blue square
		$image = imagecreate(200, 100);
		$colorBlue = imagecolorallocate($image, 128, 128, 255);
		$colorWhite = imagecolorallocate($image, 255, 255, 255);
		imagefill($image, 0, 0, $colorBlue);

		//add file creation time to image
		imagestring($image, 4, 10, 10, 
			date("Y-m-d H:i:s"), 
			$colorWhite);

		//write it to a file 
		imagejpeg($image, "blue_square.jpg");
	}
	
	//print image tag that show image 
	print("<IMG SRC=\"blue_square.jpg\" " .
		"HEIGHT=\"100\" WIDTH=\"200\" BORDER=\"0\">");
?>
</BODY>
</HTML>