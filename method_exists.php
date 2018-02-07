<HTML>
<HEAD>
<TITLE>method_exists</TITLE>
</HEAD>
<BODY>
<?
	class animal
	{
		var $name;
	}
	
	class dog extends animal
	{
		var $owner;

		function speak()
		{
			print("woof!");
		}
	}

	$gus = new dog;
	$gus->name = "Gus";

	if(method_exists($gus, "speak"))
	{
		$gus->speak();
	}
?>
</BODY>
</HTML>