<HTML>
<HEAD>
<TITLE>filemtime</TITLE>
</HEAD>
<BODY>
<?php
	$LastMod = filemtime("data.txt");
	print("Last modification was ");
	print(date("l F d, Y", $LastMod));
?>
</BODY>
</HTML>