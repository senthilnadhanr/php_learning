<HTML>
<HEAD>
<TITLE>function_exists</TITLE>
</HEAD>
<BODY>
<?
	$function = "date";
	if(function_exists($function))
	{
		print($function . " exists");
	}
?>
</BODY>
</HTML>