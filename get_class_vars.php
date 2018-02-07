<HTML>
<HEAD>
<TITLE>get_class_vars</TITLE>
</HEAD>
<BODY>
<?
	class animal
	{
		var $name="none";
		var $age=0;
		var $color="none";	
	}
	
	$gus = new animal;
	$gus->name = "Gus";
	$gus->age = 7;
	$gus->color = "black and tan";

	print("<B>get_class_vars</B><BR>\n");
	foreach(get_class_vars("animal") as $key=>$val)
	{
		print("$key=$val<BR>\n");
	}

	print("<BR>\n");
	
	print("<B>get_object_vars</B><BR>\n");
	foreach(get_object_vars($gus) as $key=>$val)
	{
		print("$key=$val<BR>\n");
	}
?>
</BODY>
</HTML>