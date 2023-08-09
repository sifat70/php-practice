<?php

/*
$employees = array(

	array("Imtiaj", "imyiaj@gmail.com", "Developer"),
	array(" Asif", "asif@gmail.com", "Marketing"),
	array("Farhad", "farhad@gmail.com", "Designer"),
);

echo " Employess Name : " . $employees[1][0] . " Email : " . $employees[1][1] . " position : " . $employees[1][2];

#  $employees[row number][column number]

*/

$continents = array(

	"Asia" => array("Bangladesh", "Indai", "Pakistan"),
	"Europe" => array("England", "Italy", "Portugal"),
	"Africa" => array("Spmalia", "Kenya", "Libiya")
);

/*
echo $continents["Asia"][1];
echo "<br>";
echo $continents["Asia"][2];
echo "<br>";
print_r($continents);
*/

foreach ($continents['Europe'] as $country) {
	echo $country . "<br>";
}

?>