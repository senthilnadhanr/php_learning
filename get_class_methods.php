<HTML>
<HEAD>
<TITLE>get_class_methods</TITLE>
</HEAD>
<BODY>
<?
	class dog
	{
		var $name="none";
		var $sound="woof!";
				
		function speak()
		{
			print($this->sound);
		}
	}
	
	$gus = new dog;
	$gus->name = "Gus";

	foreach(get_class_methods("dog") as $methods)
	{
		print("$methods<BR>\n");
	}
?>
</BODY>
</HTML>