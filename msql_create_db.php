<HTML>
<HEAD>
<TITLE>msql_create_db</TITLE>
</HEAD>
<BODY>
<?php
	$Link = msql_connect("msql.clearink.com");
	msql_create_db("store", $Link);
	msql_close($Link);
?>
</BODY>
</HTML>