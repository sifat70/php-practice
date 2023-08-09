<?php

$newCity = "Rangpur";

$cityy = array("Dhaka", "Rajsahi", "Chittagong", "Khulna",);

$city = array("Dhaka", "Rajsahi", "Chittagong", "Khulna", "Rangpur");
if (in_array($newCity, $cityy)) {
	echo "New City is available";
}
else{
	echo "Not Found";
}

echo "<br> <br>";


if (in_array($newCity, $city)) {
	echo "New City is available";
}
else{
	echo "Not Found";
}

/*

in_array($newCity,$city)
means $newCity er value is available in &city 

or

in_array($newCity,$city)
mane $newCity er value ta $city er value gular moddhe uposthit উপস্থিত


*/


?>