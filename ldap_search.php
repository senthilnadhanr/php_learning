<HTML>
<HEAD>
<TITLE>ldap_search</TITLE>
</HEAD>
<BODY>
<?
	/*
	** Function: compareEntry
	** This function compares two entries for
	** the purpose of sorting.
	*/
	function compareEntry($left, $right)
	{
		$ln = strcmp($left["last"], $right["last"]);
		if($ln == 0)
		{
			return(strcmp($left["first"], 
				$right["first"]));
		}
		else
		{
			return($ln);
		}
	}

	//connect to LDAP server
	if(!($ldap=ldap_connect("ldap.php.net")))
	{
		die("Could not connect to LDAP server!");
	}

	//set up search criteria 
	$dn = "dc=php, dc=net";
	$filter = "sn=Atkinson";
	$attributes = array("givenname", "sn");

	//perform search 
	if(!($result = ldap_search($ldap, $dn, $filter, $attributes)))
	{
		die("Nothing Found!");
	}

	//get all the entries
	$entry = ldap_get_entries($ldap, $result);

	print("There are " . $entry["count"] . " people.<br>\n");

	//pull names out into array so we can sort them
	for($i=0; $i < $entry["count"]; $i++)
	{
		//Note how we only use the first entry.  This
		//code assumes people only have one first name,
		//and one last name.
		$person[$i]["first"] = $entry[$i]["givenname"][0];
		$person[$i]["last"] = $entry[$i]["sn"][0];
	}
	
	//sort by last name, then first name using
	//compareEntry (defined above)
	usort($person, "compareEntry");


	//loop over each entry
	for($i=0; $i < $entry["count"]; $i++)
	{
		print($person[$i]["first"] . " " . 
			$person[$i]["last"] . "<BR>\n"); 
	}

	//free memory used by search
	ldap_free_result($result);
?>
</BODY>
</HTML>