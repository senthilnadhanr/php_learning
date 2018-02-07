<HTML>
<HEAD>
<TITLE>wddx_deserialize</TITLE>
</HEAD>
<BODY>
<?
	//simulate WDDX packet
	$packet = "<wddxPacket version='0.9'>";
	$packet .= "<data>";
	$packet .= "<string>Core PHP Programming</string>";	
	$packet .= "</data>";
	$packet .= "</wddxPacket>";

	//pull data out of packet
	$data = wddx_deserialize($packet);

	//test the type of the variable
	if(is_array($data))
	{
		//loop over each value
		foreach($data as $key=>$value)
		{
			print("$key: $value<BR>\n");
		}
	}
	else
	{
		//simply print the value
		print("$data<BR>\n");
	}
?>
</BODY>
</HTML>