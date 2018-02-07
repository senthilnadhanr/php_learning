<HTML>
<HEAD>
<TITLE>ldap_explode_dn</TITLE>
</HEAD>
<BODY>
<?
	//set test DN
	$dn = "cn=Leon Atkinson, o=Clear Ink, c=US";
	
	$rdn = ldap_explode_dn($dn, FALSE);

	for($index = 0; $index < $rdn["count"]; $index++)
	{
		print("$rdn[$index] <BR>\n");
	}
?>
</BODY>
</HTML>