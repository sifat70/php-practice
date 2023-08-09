<?php

/*
define("PI", 3.1416);

echo PI;
*/

//agee hostname then buusername then dbpassname then dbname

define("HOSTNAME", "localhost");
define("DBUSER", "root");
define("DBPASS", ""); // "" or '' means null
define("DBNAME", "test");

 $conn=mysqli_connect(HOSTNAME, DBUSER, DBPASS, DBNAME);


if($conn)
{
	echo "Hurrah! Database Connected";
}


?>