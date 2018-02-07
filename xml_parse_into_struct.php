<HTML>
<HEAD>
<TITLE>xml_parse_into_struct</TITLE>
</HEAD>
<BODY>
<?
	//create parser
	if(!($parser = xml_parser_create()))
	{
		print("Could not create parser!<BR>\n");
		exit();
	} 

	//get entire file
	$data = implode(file("example.xml"), "");

	//parse file into array
	xml_parse_into_struct($parser, $data, &$structure, &$index);
	
	//destroy parser
	xml_parser_free($parser);

	print("Structure:<BR>\n");
	print("<TABLE BORDER=\"1\">\n");
	print("<TR>\n");
	print("<TH>Tag</TH>\n");
	print("<TH>Type</TH>\n");
	print("<TH>Level</TH>\n");
	print("<TH>Value</TH>\n");
	print("<TR>\n");
	
	foreach($structure as $s)
	{
		print("<TR>\n");

		print("<TD>{$s["tag"]}</TD>\n");
		print("<TD>{$s["type"]}</TD>\n");
		print("<TD>{$s["level"]}</TD>\n");
		print("<TD>{$s["value"]}</TD>\n");

		print("<TR>\n");
	}
	
	print("</TABLE>\n");

	print("Element Reference:<BR>\n");
	foreach($index as $key=>$value)
	{
		print("$key:");
		foreach($value as $i)
		{
			print(" $i");
		}
		print("<BR>\n");
	}
?>
</BODY>
</HTML>

