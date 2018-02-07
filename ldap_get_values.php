<HTML>
<HEAD>
<TITLE>ldap_get_values</TITLE>
</HEAD>
<BODY>
<?
	//connect to LDAP server
	if(!($ldap=ldap_connect("ldap.php.net")))
	{
		die("Could not connect to LDAP server!");
	}

	//set up search criteria 
	$dn = "cn=John Smith, dc=php, dc=net";
	$filter = "sn=*";
	$attributes = array("givenname", "sn", "mail");

	//perform search 
	if(!($result = ldap_read($ldap, $dn, $filter, $attributes)))
	{
		die("Nothing Found!");
	}

	$entry = ldap_first_entry($ldap, $result);
	$values = ldap_get_values($ldap, $entry, "mail");

	print($values["count"] . " Values:<OL>\n");

	for($index=0; $index < $values["count"]; $index++)
	{
		print("<LI>$values[$index]\n");
	}

	print("</OL>\n");

	ldap_free_result($result);
?>
</BODY>
</HTML>