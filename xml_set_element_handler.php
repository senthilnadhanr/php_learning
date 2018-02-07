<HTML>
<HEAD>
<TITLE>xml_set_element_handler</TITLE>
</HEAD>
<BODY>
<?
	/*
	** define functions
	*/
	function cdataHandler($parser, $data)
	{
		print($data);
	}

	function startHandler($parser, $name, $attributes)
	{
		switch($name)
		{
			case 'EXAMPLE':
				print("<HR>\n");
				break;
			case 'TITLE':
				print("<B>");
				break;
			case 'CODE':
				print("<PRE>");
				break;
			default:
				//ignore other tags
		}
	}
	
	function endHandler($parser, $name)
	{
		switch($name)
		{
			case 'EXAMPLE':
				print("<HR>\n");
				break;
			case 'TITLE';
				print("</B>");
				break;
			case 'CODE':
				print("</PRE>");
				break;
			default:
				//ignore other tags
		}
	}

	function piHandler($parser, $target, $data)
	{
		if($target == "php")
		{
			eval($data);
		}
		else
		{
			print(htmlentities($data));
		}
	}
	

	function defaultHandler($parser, $data)
	{
		global $defaultText;
		
		$defaultText .= $data;
	}

	function ndataHandler($parser, $name, $base, $systemID, $publicID, 
		$notation)
	{
		print("<!--\n");
		print("NDATA\n");
		print("Entity: $name\n");
		print("Base: $base\n");
		print("System ID: $systemID\n");
		print("Public ID: $publicID\n");
		print("Notation: $notation\n");
		print("-->\n");
	}

	function notationHandler($parser, $name, $base, $systemID, $publicID)
	{
		print("<!--\n");
		print("Notation: $name\n");
		print("Base: $base\n");
		print("System ID: $systemID\n");
		print("Public ID: $publicID\n");
		print("-->\n");
	}

	function externalHandler($parser, $name, $base, $systemID, $publicID)
	{
		//here you could create another parser
		print("<!--Loading $systemID-->\n");
		
		return(TRUE);
	}


	/*
	** Initialize
	*/
	
	//create parser
	if(!($parser = xml_parser_create()))
	{
		print("Could not create parser!<BR>\n");
		exit();
	} 

	//make sure we're using ISO-8859-1 encoding
	if(xml_parser_get_option($parser, XML_OPTION_TARGET_ENCODING) != 
		"ISO-8859-1")
	{
		xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, 
			"ISO-8859-1"); 
	}
	
	//register handlers
	xml_set_character_data_handler($parser, "cdataHandler");
	xml_set_element_handler($parser, "startHandler", "endHandler");
	xml_set_processing_instruction_handler($parser, "piHandler");
	xml_set_default_handler($parser, "defaultHandler"); 
	xml_set_unparsed_entity_decl_handler($parser, "ndataHandler"); 
	xml_set_notation_decl_handler($parser, "notationHandler"); 
	xml_set_external_entity_ref_handler($parser, "externalHandler");

	
	/*
	** Parse file
	*/
	if(!($fp = fopen("example.xml", "r")))
	{
		print("Couldn't open example.xml!<BR>\n");
		xml_parser_free($parser);
		exit();
	}
	
	while($line = fread($fp, 1024))
	{
	    if(!xml_parse($parser, $line, feof($fp))) 
	    {
	    	//Error, so print full info
	        print("ERROR: " .
	        	xml_error_string(xml_get_error_code($parser)) .
	        	" at line " .
	        	xml_get_current_line_number($parser) . 
	        	", column " . 
	        	xml_get_current_column_number($parser) .
	        	", byte " .
	        	xml_get_current_byte_index($parser) . 
	        	"<BR>\n");
	    }
	}

	//destroy parser
	xml_parser_free($parser);

	print("Text handled by the default handler:\n");
	print("<PRE>" . htmlentities($defaultText) . "</PRE>\n");
?>
</BODY>
</HTML>