<HTML>
<HEAD>
<TITLE>get_cfg_var</TITLE>
</HEAD>
<BODY>
<?
	print("Scripts are allowed to run " . 
		get_cfg_var("max_execution_time") . 
		" seconds");
?>
</BODY>
</HTML>