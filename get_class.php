<HTML>
<HEAD>
<TITLE>get_class</TITLE>
</HEAD>
<BODY>
<?
	class animal
	{
		var $name;
	}
	
	$gus = new animal;
	$gus->name = "Gus";
	
	print("$gus->name is of type " . 
		get_class($gus) . "<BR>\n");
?>
</BODY>
</HTML>