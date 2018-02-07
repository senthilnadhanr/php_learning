<?php
$amount = 100.50;//float,decimal
$people_count = 10;//integer
$is_married = true;//boolean
$first_name ='senthil';//string
$name = "$first_name nadhan";


/* array */
#commenting

//$hobbies = array();
//$hobbies = [];
$hobbies[] = 100;
$hobbies[] = 'volley ball';

//$carrer['schoolings'][] = 'HSC';
//$carrer['schoolings'][] = 'SSLC';
$carrer['schoolings']= ['HSC','SSLC'];

//$carrer['college'][] = 'UG';
//$carrer['college'][] = 'PG';
$carrer['college']= ['UG'=>[],'PG'=>[]];

$carrer['college']['UG'] = ['collegeName'=>'IIT','degree'=>'BE'];

/* Object */

#Human//class
#male/female//object




class Human{
	public $organs;
	public $vision;
	public $sense;
	
	//public function sleep();
	public function eat(){}
}
class Male extends Human
{
	public function work(){}
	public function housekeeping(){}
}

$ram  = new Male();

$stdClass = new stdClass();

//NULL
//resource

//var_dump($name1);
//echo "<pre>";print_r($name1);

?>