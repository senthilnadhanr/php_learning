<HTML>
<HEAD>
<TITLE>get_meta_tags</TITLE>
<META NAME="description" CONTENT="Demonstration of get_meta_tags.">
<META NAME="keywords" CONTENT="PHP, Core PHP, Leon Atkinson">
<META NAME="Name With Space" CONTENT="see how the name changes">
</HEAD>
<BODY>
<?
	$tag = get_meta_tags("get_meta_tags.php");
	
	//dump all elements of returned array
	print("<PRE>");
	print_r($tag);
	print("</PRE>\n");
	
	//get all tags as variables
	extract($tag, EXTR_PREFIX_ALL, "meta");
	
	print("Description is <I>$meta_description</I><BR>\n");
?>
</BODY>
</HTML>