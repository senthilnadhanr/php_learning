<HTML>
<HEAD>
<TITLE>snmpwalk</TITLE>
</HEAD>
<BODY>
<?
	//get all the SNMP objects
	$snmp = snmpwalk("ucd-snmp.ucdavis.edu", "demopublic", "");

	reset($snmp);
	while(list($key, $value) = each($snmp))
	{
		print($value . "<BR>\n");
	}
?>
</BODY>
</HTML>