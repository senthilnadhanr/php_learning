<HTML>
<HEAD>
<TITLE>ldap_list</TITLE>
</HEAD>
<BODY>
<?
	/*
	** ldap_list example
	** This script explores the organizational units at
	** the University of Michigan.  Links are created
	** to explore units within units.
	*/

	if(!isset($dn))
	{
		$dn = "o=University of Michigan, c=US";
	}

	print("<B>Search DN:</B> $dn<BR>\n");

	//connect to LDAP server
	if(!($ldap=ldap_connect("ldap.itd.umich.edu")))
	{
		die("Could not connect to LDAP server!");
	}
	
	$filter = "objectClass=*";
	$attributes = array("ou", "cn");
	
	//perform search 
	if(!($result = ldap_list($ldap, $dn, $filter, $attributes)))
	{
		die("Nothing Found!");
	}

	$entries = ldap_get_entries($ldap, $result);
	
	for($index = 0; $index < $entries["count"]; $index++)
	{
		if($entries[$index]["ou"][0])
		{
			print("<A HREF=\"$PHP_SELF?dn=".$entries[$index]["dn"]."\">");
			print($entries[$index]["ou"][0]);
			print("</A>");
		}
		else
		{
			print($entries[$index]["cn"][0]);
		}
				
		print("<BR>\n");
	}

	ldap_free_result($result);

	// close connection 
	ldap_close($ldap);
?>
</BODY>
</HTML>