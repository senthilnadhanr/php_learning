<HTML>
<HEAD>
<TITLE>ldap_add</TITLE>
</HEAD>
<BODY>
<?
	//connect to LDAP server
	if(!($ldap=ldap_connect("ldap.php.net")))
	{
		die("Could not connect to LDAP server!");
	}
	
	//set login DN 
	$dn="cn=root, dc=php, dc=net";

	//attempt to bind to DN using password
	if(!ldap_bind($ldap, $dn, ""))
	{
		die("Unable to bind to '$dn'!");
	}
	
	// create entry 
	$entry["cn"]="John";
	$entry["sn"]="Smith";
	$entry["mail"][0]="jsmith123@hotmail.com";
	$entry["mail"][1]="smith@bigfoot.com";
	$entry["objectclass"]="person";
	$entry["telephonenumber"] = "123-123-1234";
	$entry["mobile"] = "123-123-1235";
	$entry["pager"] = "123-123-1236";
	$entry["o"] = "ACME Web Design";
	$entry["title"] = "Vice President";
	$entry["department"] = "Technology";

	//create new entry's DN
	$dn = "cn=John Smith, dc=php, dc=net";

	//add entry
	if(ldap_add($ldap, $dn, $entry))
	{
		print("Entry Added!\n");
	}
	else
	{
		print("Add failed!");
	}

	//close connection 
	ldap_close($ldap);
?>
</BODY>
</HTML>