<?php

$server_code=500;

switch ($server_code) {
	case 404:
		echo "Eror! 404 Page not found";
		break;
	case 400:
		echo "Server Not Found";
		break;
	case 503:
		echo "503 Forbidden";
		break;
	case 500:
		echo "Welcome to this page";
		break;
	default:
		echo "Service unavailable";
		break;
}
// যেখানে মিল পাবে ওইটা দেখানোর পর break হয়ে যাবে। কোন মিল না পাওয়া গেলে default টা দেখাবে।

?>