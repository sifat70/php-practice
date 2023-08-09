<?php

//you can add new element ar first of array using array_unshift ethod
$city = array("Dhaka", "Rajsahi", "Chittagong", "Khulna");

array_unshift($city, "Barishal", "Noakhali");

print_r($city);

?>