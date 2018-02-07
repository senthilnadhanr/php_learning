<HTML>
<HEAD>
<TITLE>fgetcsv</TITLE>
</HEAD>
<BODY>
<?
	// open file
	if($myFile = fopen("data.csv", "r"))
	{
		print("<TABLE>\n");

		while(!feof($myFile))
		{
			print("<TR>\n");
		
			$myField = fgetcsv($myFile, 1024);

			for($n=0; $n<count($myField); $n++)
			{
				print("\t<TD>");
				print($myField[$n]);
				print("</TD>\n");
			}

			print("</TR>\n");
		}

		fclose($myFile);

		print("</TABLE>\n");
	}	
?>
</BODY>
</HTML>