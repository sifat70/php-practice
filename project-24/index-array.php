<?php

/*

# Array Type

1.Index Array
2.Associative Array
3.Multidimensional Array

*/

# Index Array

$phones = array('samsung', 'oppo', 'Redmi', 'Vivo', 'Iphone');

/*
$phones = ['samsung', 'oppo', 'Redmi', 'Vivo', 'Iphone']; (same as $phones = array (.....))

we can use arry by using this: [] instade of this: array()
*/



//echo "I want to buy : " . $phones[0];
#(0, 1, 2, 3,..... index number)

//var_dump($phones);

//print_r($phones); #only array er detail show korbe

#echo count($phones); //count method




// Foreach Loop er alternative 
$total = count($phones);

for ($i=0; $i < $total; $i++) { 
	echo $phones[$i] . "<br>";
}








?>