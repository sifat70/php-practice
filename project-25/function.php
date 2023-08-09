<?php 

// default function



// declare function
function hello()
{
	echo "Welcome to this app<br>";
}


//call function

hello();
hello();
hello();

echo "<hr>";


//fuction with parameter & argument

function userInfo($name, $email, $age = ' ')
{
	echo "Username: ".$name."Email: ".$email."Age: ".$age."<br>";
}


userInfo("Imtiaj", "imtaij@gmail.com" , 20);
userInfo("Asif", ".asif@gmail.com" , 10);
userInfo("Sifat", "mdshepatul.islam@gmail.com");

echo "<hr>";


// Function with return value

function sum($x, $y){
	$add = $x+$y;
	return $add;
}


echo sum(30, 40)."<br>";
echo sum(49, 58);


 ?>