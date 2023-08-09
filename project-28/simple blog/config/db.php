<?php 

 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 define('DB_NAME', 'simple-blog');



$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if(!$conn){
	echo "Connection Problem".mysqli_connect_error();
}


 ?>