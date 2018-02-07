<HTML>
<HEAD>
<TITLE>ldap_delete</TITLE>
</HEAD>
<BODY>
<?
	// connect to LDAP server 
	if(!($ldap=ldap_connect("ldap.php.net")))
	{
		die("Unable to connect to LDAP server!");
	}
	
	//set login DN 
	$dn="cn=root, dc=php, dc=net";

	//attempt to bind to DN using password
	if(!ldap_bind($ldap, $dn, "secret"))
	{
		die("Unable to bind to '$dn'!");
	}

	//delete entry from directory 
	$dn="cn=John Smith, dc=clearink, dc=com";
	if(ldap_delete($ldap, $dn))
	{
		print("Entry Deleted!\n");
	}
	else
	{
		print("Delete failed!\n");
	}
	
	//close connection 
	ldap_close($ldap);
?>
</BODY>
</HTML>