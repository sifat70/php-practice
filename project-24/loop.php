<?php

# Loop Type

/*
1.For Loop
2.While Loop
3.Do While Loop
4.Foreach Loop

*/


/*

# For Loop

for ($x=1; $x<10; $x++) { 
	echo $x . "<br>";
}

*/


/*

# While Loop

$x=1;
while ($x<=5){
	echo $x . "<br>";
	$x++;
}

*/


/*

# Do While Loop

$x=1;
do {
	echo $x . "<br>";
	$x++;
		
} while ($x<=15);

*/


# Foreach Loop (ফরেক loop)

$phones = array("Samsung", "Oppo", "Redmi", "Vivio", "IPhone");

foreach ($phones as $phone){
	echo "Stock Available : " . $phone . "<br>";
}

/*
phone er jaigai x, y, z jekono kisu naoa jabe. phone new ekta variable 
*/

?>