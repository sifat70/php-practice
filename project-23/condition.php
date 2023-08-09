<?php

$today = date("l");

if ($today == 'Friday') {
	echo 'Today is weekend';
}

else if($today == 'Thursday'){
	echo "Weekend is coming";
}

else if($today == 'Saturday'){
	echo "Weekend Over";
}

else{
	echo "It's working day";
}

// if or, else if যেকোনো একটার সর্ত মিল্লে ঐখানে stop হয়া যাবে। else এর out put show করবে না।


?>