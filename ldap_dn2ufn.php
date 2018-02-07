<HTML>
<HEAD>
<TITLE>ldap_dn2ufn</TITLE>
</HEAD>
<BODY>
<?
	$dn = "cn=John Smith, dc=php, dc=net";
	print(ldap_dn2ufn($dn));
?>
</BODY>
</HTML>