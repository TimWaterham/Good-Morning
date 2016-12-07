<?php 
$time = date("G");

if ($time < 6) {
	echo "Good night";
} 	else if($time < 12){
	echo "Good morning";
}	else if($time < 18){
	echo "Good day";
}	else {
	echo "Good evening";
}
