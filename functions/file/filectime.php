<HTML>
<HEAD>
<TITLE>filectime</TITLE>
</HEAD>
<BODY>
<?php
	$LastChange = filectime("data.txt");
	print("Last change was ");
	print(date("l F d, Y", $LastChange));
?>
</BODY>
</HTML>