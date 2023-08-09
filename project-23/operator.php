<?php

#PHP Operator
/*

1. Arithmatic Operator

*/

$x = 10;
$y = 6;

//echo '$x and $y Addition is : ' . ($x+$y);
echo "First Value : " . $x . " Second Value : " . $y . " Total Addition : " . $x+$y . "<br>";
echo "First Value : " . $x . " Second Value : " . $y . " Total Subtraction : " . $x-$y . "<br>";
echo "First Value : " . $x . " Second Value : " . $y . " Total Multiplication : " . $x*$y . "<br>";
echo "First Value : " . $x . " Second Value : " . $y . " Total Divition : " . $x/$y . "<br>";
echo "First Value : " . $x . " Second Value : " . $y . " Total Modulas : " . $x%$y . "<br>"; // modulas means ভাগশেষ
echo "First Value : " . $x . " Second Value : " . $y . " Total 	Exponentiation : " . $x**$y . "<br>"; // x^y  power like squire queb.... 

echo "<hr>";


#2.Assignment Oprators

$x=10;
$x += 20; //$x=10+20
echo $x;
echo "<br>";

$x=10;
$x -=20; //$x=10-20
echo $x;
echo "<br>";

$x=10;
$x *=20; //$x=10*20
echo $x;
echo "<br>";


$x=10;
$x /=20; //$x=10/20
echo $x;
echo "<br>";


$x=10;
$x %=20; //$x=10%20
echo $x;
echo "<br>";

echo "<hr>";

/*
3.Comparison Operator
*/

$x=25;
$y=35;
$z="25";

// == equal (only value equal holei hobe data type lagbe na)
var_dump($x == $y); echo "<br>";
var_dump($x == $z); echo "<br>";
var_dump($y == $z); echo "<br>";
echo "<br> <br> <br>";



// === identical ( data type and value both will be checked)
var_dump($x === $y); echo "<br>";
var_dump($x === $z); echo "<br>";
var_dump($y === $z); echo "<br>";
echo "<br> <br> <br>";


// != not equal
var_dump($x != $y); echo "<br>";
var_dump($x != $z); echo "<br>";
var_dump($y != $z); echo "<br>";
echo "<br> <br> <br>";



// !== not identical
var_dump($x !== $y); echo "<br>";
var_dump($x !== $z); echo "<br>";
var_dump($y !== $z); echo "<br>";
echo "<br> <br> <br>";



// < less than
var_dump($x < $y); echo "<br>";
var_dump($x < $z); echo "<br>";
var_dump($y < $z); echo "<br>";
echo "<br> <br> <br>";



// > greater than
var_dump($x > $y); echo "<br>";
var_dump($x > $z); echo "<br>";
var_dump($y > $z); echo "<br>";
echo "<br> <br> <br>";



// <= lessthan equal
var_dump($x <= $y); echo "<br>";
var_dump($x <= $z); echo "<br>";
var_dump($y <= $z); echo "<br>";
echo "<br> <br> <br>";



// >= greater than equal
var_dump($x >= $y); echo "<br>";
var_dump($x >= $z); echo "<br>";
var_dump($y >= $z); echo "<br>";
echo "<br> <br> <br>";


# 4.Increment or, Decrement Operators

$x=10;
$y=15;
echo ++$x; #pre increament
echo "<br>";
echo --$y; #pre decriment
echo "<br> <br> <br>";

# 5.Logical Operators
/*
 and, &&(২ টার মধ্যে ২টি সঠিক হবে ১টি সঠিক হলে হবে না।)

 or, ||(২ টার মধ্যে যেকোনো ১টি বা ২টি সঠিক হবে।)

 xor(২ টার মধ্যে যেকোনো ১ টি সঠিক হবে ২ টি সঠিক হবে না।)

 !(not)

*/

$x=100;
$y=50;

if ($x==105 && $y==50) {
	echo "Hello world!";
}else{
	echo "Your condition incorrect";
}
echo "<br> <br>";


if ($x==105 and $y==50) {
	echo "Hello world!";
}else{
	echo "Your condition incorrect";
}
echo "<br> <br>";


if ($x==105 or $y==50) {
	echo "Hello world!";
}else{
	echo "Your condition incorrect";
}
echo "<br> <br>";


if ($x==105 || $y==50) {
	echo "Hello world!";
}else{
	echo "Your condition incorrect";
}
echo "<br> <br>";



if ($x==105 xor $y==50) {
	echo "Hello world!";
}else{
	echo "Your condition incorrect";
}
echo "<br> <br>";

#6.String Operators

#7. Array Operatos(পরে করাবে)

#8.Conditional Assignment Operators (পরে করাব)

?>
