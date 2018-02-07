<HTML>
<HEAD>
<TITLE>iptcparse</TITLE>
</HEAD>
<BODY>
<?
	$image_file = "news.jpg";
	$image_size = getimagesize($image_file, &$image_info);
	
	//show IPTC information
	if(is_array($image_info["APP13"]))
	{
		while(list($key, $value) = each($image_info["APP13"]))
		{
			print("$key: $value<BR>\n");	
		}
	}
	else
	{
		print("No IPTC block<BR>\n");
	}
?>
</BODY>
</HTML>