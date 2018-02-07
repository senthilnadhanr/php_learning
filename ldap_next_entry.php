<HTML>
<HEAD>
<TITLE>ldap_next_entry</TITLE>
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

	//get each entry 
	$entry = ldap_first_entry($ldap, $result);
	do
	{
		//dump all attributes for each entry
		$attribute = ldap_get_attributes($ldap, $entry);
		print("<PRE>");
		var_dump($attribute);
		print("</PRE>\n");
		print("<HR>\n");
	}
	while($entry = ldap_next_entry($ldap, $entry));

	ldap_free_result($result);
?>
</BODY>
</HTML>