<HTML>
<HEAD>
<TITLE>getimagesize</TITLE>
</HEAD>
<BODY>
<?
	$image_file = "php.gif";
	$image_size = getimagesize($image_file, &$image_info);
	print("<IMG SRC=\"$image_file\" $image_size[3]><BR>\n");
	
	//show information if it exists
	while(list($key, $value) = each($image_info))
	{
		print($key . "<BR>\n");	
	}
?>
</BODY>
</HTML>