<?php

// variable/data type

/*

1.String (cotation er vitore ja lekha hoi)
2.Integer (purno sonkha er jonno)
3.Float/Double (doshomik er jonno)
4.Boolean (True or False er jonno. True hole 1, False hole 0 or kisu dekhabe na)
5.Array (multiple data)
6.Object
7.Null (whole data is blur or khali or kisu dekhabe na)
8.Resource
** constant varible
(another type of varible constant varible)
*/

//decalare variable

$name = "Mr. Hasan";//String
$age = 30; //Integer
$isMale = true; //Boolean (false dile kisui dekhabe na karon false=>0)
$hight = 5.6; //Float or Double
$salary = null; //Null


echo "Name is : " . $name . "<br>";
echo "Age is : " . $age . "<br>";
echo "Gender is : " . $isMale . "<br>";
echo "Hight is : " . $hight . "<br>";
echo "Salary is : " . $salary . "<br>";


echo "<hr>";
var_dump($name, $age, $isMale, $hight, $salary);  //troubleshoot or fix or problem solve er jonno data check korte bebohar kora hoi

echo "<hr>";

// variable checking dunction (true hole 1 dekhabe fase hole kis dekhabe na)

echo is_string($name) . "<br>";
echo is_int($age) . "<br>";
echo is_bool($isMale) . "<br>";
echo is_double($hight) . "<br>";
echo is_float($hight) . "<br>";
echo is_null($salary) . "<br>";



?>