<?php

$age= array(

	' Jhon ' => '38',
	' Doe ' => '32',
	' Peter ' => '45'
);


/*

asort($age); // assending order by value

//sonkhar boro teke soto onusare sajano

foreach ($age as $key => $k_value) {
	echo "Name : " . $key . "age : " . $k_value . "<br>";
}
*/

/*
arsort($age); // desending order by value

//sonkhar soto teke boro onusare sajano

foreach ($age as $key => $k_value) {
	echo "Name : " . $key . "age : " . $k_value . "<br>";
}

*/


/*
ksort($age); // assending order by key

//sobder boro teke soto onusare sajano


foreach ($age as $key => $k_value) {
	echo "Name : " . $key . "age : " . $k_value . "<br>";
}
*/

krsort($age); // desending order by key

//sobder soto teke boro onusare sajano


foreach ($age as $key => $k_value) {
	echo "Name : " . $key . "age : " . $k_value . "<br>";
}
?>