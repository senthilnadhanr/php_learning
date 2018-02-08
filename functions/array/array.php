<html>
<head>
    <title>array</title>
</head>
<body>
<?php
//create an array
$myArray = array(
    "Name" => "Leon Atkinson",
    "Profession" => array("Programmer", "Author"),
    "Residence" => "Martinez, California"
);
echo "<pre>";
print_r($myArray);

$skills = ['PHP', 'java', 'c++'];

$candidate['skills'] = $skills;

$experienceObj = new stdClass();
$experienceObj->company = 'zanec';
$experienceObj->experience = '2 years';

$experienceObj1 = new stdClass();
$experienceObj1->company = 'CPT';
$experienceObj1->experience = '3 years';

$candidate['experience'][4] = $experienceObj;
$candidate['experience'][5] = $experienceObj1;
echo "<h1>Experiance</h1><pre>";
foreach ($candidate['experience'] as $experience) {
    echo 'Company:' . $experience->company;
    echo "<br>";
    echo 'Experience:' . $experience->experience;
    echo "<br>";
    echo "============<br>";
}
echo "<h1>Skills</h1><pre>";
$skill = 'PHP';
foreach ($candidate['skills'] as $skill) {
    echo $skill . ',';
}


print_r($skills);
print_r($candidate);
exit;
?>
</body>
</html>