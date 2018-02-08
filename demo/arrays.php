<?php

//$skills = ['php'=>['zend','laravel'],'java'=>1.9,'c#'=>4];

$skills['saleem'] = ['1'=>'php',2=>'java',3=>'c#'];
$skills['senthil'] = ['php','html','js'];



echo "<pre>";
print_r(array_values($skills['saleem']));exit;