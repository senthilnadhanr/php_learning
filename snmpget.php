<HTML>
<HEAD>
<TITLE>snmpget</TITLE>
</HEAD>
<BODY>
<?
	//find out how long the system has been up
	//should return something like 
	//Timeticks: (586731977) 67 days, 21:48:39.77
	if($snmp = snmpget("ucd-snmp.ucdavis.edu", 
		"demopublic", "system.sysUpTime.0"))
	{
		print($snmp);
	}
	else
	{
		print("snmpget failed!");
	}
?>
</BODY>
</HTML>