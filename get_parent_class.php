<HTML>
<HEAD>
<TITLE>get_parent_class</TITLE>
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
	}
	
	$gus = new dog;
	$gus->name = "Gus";

	//Gus is of type dog, which is of type animal
	print("$gus->name is of type " . 
		get_class($gus) . ", which is of type ".
		get_parent_class($gus) . "<BR>\n");
?>
</BODY>
</HTML>