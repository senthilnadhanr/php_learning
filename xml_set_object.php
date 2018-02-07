<HTML>
<HEAD>
<TITLE>xml_set_element_handler</TITLE>
</HEAD>
<BODY>
<?
	class myParser
	{
		var $parser;
	
		function parse($filename)
		{
			//create parser
			if(!($this->parser = xml_parser_create()))
			{
				print("Could not create parser!<BR>\n");
				exit();
			} 

			//associate parser with this object
			xml_set_object($this->parser, &$this);
			
			//register handlers
			xml_set_character_data_handler($this->parser, 
				"cdataHandler");
			xml_set_element_handler($this->parser, 
				"startHandler", "endHandler");
		
			
			/*
			** Parse file
			*/
			if(!($fp = fopen($filename, "r")))
			{
				print("Couldn't open example.xml!<BR>\n");
				xml_parser_free($this->parser);
				return;
			}
			
			while($line = fread($fp, 1024))
			{
			    xml_parse($this->parser, $line, feof($fp));
			}
		
			//destroy parser
			xml_parser_free($this->parser);
		}


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
	}

	$p = new myParser;
	$p->parse("example.xml");
?>
</BODY>
</HTML>