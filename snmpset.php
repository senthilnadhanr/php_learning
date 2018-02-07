<HTML>
<HEAD>
<TITLE>snmpset</TITLE>
</HEAD>
<BODY>
<?
	//show current value of the demo string
	$snmp = snmpget("ucd-snmp.ucdavis.edu", 
		"demopublic", "ucdDemoPublicString.0");
	print("$snmp (original value)<BR>\n");

	//set it to something else
	snmpset("ucd-snmp.ucdavis.edu", 
		"demopublic", "ucdDemoPublicString.0",
		"s", "Core PHP Programming");
		
	//see current value of the demo string
	$snmp = snmpget("ucd-snmp.ucdavis.edu", 
		"demopublic", "ucdDemoPublicString.0");
	print("$snmp (new value)<BR>\n");
?>
</BODY>
</HTML>