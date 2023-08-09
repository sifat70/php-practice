<?php

/*
$employees = [

	[
		'name' => 'Imtiaj',
		'email' => 'imtiaj@gamil.com'
	],

	[
		'name' => 'Asif',
		'email' => 'asif@gamil.com'
	]

# 'key' => 'value', (=> mean associative or associative symbol)
];

print_r($employees);


*/


$employees = array(
	'Imtiaj' => 'imtiaj@gmail.com',
	'Asif' => 'asif@gmail.com',
);

foreach($employees as $name=> $email){
	echo "Name is : " . $name . " Email is : " . $email . "<br>";
}








?>