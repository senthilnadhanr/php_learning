<HTML>
<HEAD>
<TITLE>is_link</TITLE>
</HEAD>
<BODY>
<?
	$filename = "data.txt";
	
	if(is_link($filename))
	{
		print("$filename is a link");
	}
	else
	{
		print("$filename is not a link");
	}
?>
</BODY>
</HTML>