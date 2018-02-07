<HTML>
<HEAD>
<TITLE>wddx_packet_start</TITLE>
</HEAD>
<BODY>
<?
	//create test data
	$Name = "Leon Atkinson";
	$Email = "corephp@leonatkinson.com";
	$Residence = "Martinez";
	
	$Info = array("Email", "Residence");

	//start packet
	$wddx = wddx_packet_start("Core PHP Programming");

	//add some variables to the packet
	wddx_add_vars($wddx, "Name", $Info);

	//create packet
	$packet = wddx_packet_end($wddx);

	//print packet for demonstration purposes
	print($packet);
?>
</BODY>
</HTML>