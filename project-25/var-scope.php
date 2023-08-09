<?php 

$num1 = 40;  //global variable
$num2 = 80;  //global variable


function sum()
{
	    global $num1, $num2;
		echo $num1+$num2."<br>";

	    //echo $GLOBALS['num1']+ $GLOBALS['num2'];
}


echo $num1+$num2;

// sum();

 ?>