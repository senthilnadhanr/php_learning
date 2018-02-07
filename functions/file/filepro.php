<HTML>
<HEAD>
<TITLE>filepro</TITLE>
</HEAD>
<BODY>
<?
	//get information about database
	filepro("/fp/store");
	
	print("<TABLE>");

	//create headers that contain
	//field names, type, width
	print("<TR>\n");
	for($col=1; $col <= filepro_fieldcount(); $col++)
	{
		print("<TH>");
		print(filepro_fieldname($col));
		print(" ");
		print(filepro_fieldtype($col));
		print(" ");
		print(filepro_fieldwidth($col));
		print("</TH>");
	}		
	print("</TR>\n");

	
	//loop over each row
	for($row=1; $row <= filepro_rowcount(); $row++)
	{
		print("<TR>\n");

		//output fields
		for($col=1; $col <= filepro_fieldcount(); $col++)
		{
			print("<TD>");
			print(filepro_retrieve($row, $col));
			print("</TD>");
		}

		print("</TR>\n");
	}

	print('</TABLE>');
	
?>
</BODY>
</HTML>

