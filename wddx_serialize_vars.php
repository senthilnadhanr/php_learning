<HTML>
<HEAD>
<TITLE>wddx_serialize_vars</TITLE>
</HEAD>
<BODY>
<?
	//create test data
	$Name = "Leon Atkinson";
	$Email = "corephp@leonatkinson.com";
	$Residence = "Martinez";
	
	$Info = array("Email", "Residence");
	
	//print packet
	print(wddx_serialize_vars("Name", $Info));
?>
</BODY>
</HTML>