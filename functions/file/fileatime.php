<HTML>
<HEAD>
<TITLE>fileatime</TITLE>
</HEAD>
<BODY>
<?php
	$LastAccess = fileatime("data.txt");
	print("Last access was ");
	print(date("l F d, Y", $LastAccess));
?>
</BODY>
</HTML>