<HTML>
<HEAD>
<TITLE>ldap_next_attribute</TITLE>
</HEAD>
<BODY>
<?
	//connect to LDAP server
	if(!($ldap=ldap_connect("ldap.itd.umich.edu")))
	{
		die("Could not connect to LDAP server!");
	}
	
	// list organizations in the US 
	$dn = "o=University of Michigan, c=US";
	$filter = "objectClass=*";

	//perform search 
	if(!($result = ldap_list($ldap, $dn, $filter)))
	{
		die("Nothing Found!");
	}

	// get all attributes for first entry 
	$entry = ldap_first_entry($ldap, $result);

	$attribute = ldap_first_attribute($ldap, $entry, &$pointer);
	while($attribute)
	{
		print("$attribute<BR>\n");
		$attribute = ldap_next_attribute($ldap,	$entry, &$pointer);
	}

	ldap_free_result($result);
?>
</BODY>
</HTML>