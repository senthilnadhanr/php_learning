<HTML>
<HEAD>
<TITLE>defined</TITLE>
</HEAD>
<BODY>
<?
	define("THERMOSTAT","72 degrees");
	if(defined("THERMOSTAT"))
	{
		print("THERMOSTAT is " . THERMOSTAT);
	}
?>
</BODY>
</HTML>