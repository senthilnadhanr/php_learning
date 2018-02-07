<HTML>
<HEAD>
    <TITLE>array_column</TITLE>
</HEAD>
<BODY>
<?php
echo "Syntax:array_column(array,column_key,index_key);";
echo "<br><pre>";
// An array that represents a possible record set returned from a database
$a = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
?>

</BODY>
</HTML>